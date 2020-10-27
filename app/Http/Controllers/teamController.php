<?php

namespace App\Http\Controllers;

use App\Libraries\SmsSender;
use App\Team;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $team_id = session('user_id');
        if($team_id)
        {
            $team = Team::find($team_id);
            return view('team_information',[
            'team_id'=>$team_id,
            'en_name' => $team->en_name,
            'fa_name' => $team->fa_name,
            'organ_dependence' => $team->organ_dependence,
            'team_leader_name' => $team->team_leader_name,
            'team_leader_family' => $team->team_leader_family,
            'team_type' => $team->team_type,
            'degree' => $team->degree,
            'major' => $team->major,
            'university' => $team->university,    
            'members' => $team->members,
            ]);
        }
        

    }
    public function Dashboard()
    {
        # code...
        if(session('user_id'))
        {
            $team = Team::find(session('user_id'));
            return view('dashboard',['team_name'=>$team->fa_name]);
        }
        else
        {
            redirect();
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $messages = [
            'required' => 1,
            'unique' => 2,
            'min' => 3
        ];
        $validator = Validator::make($request->all(), [
            'en_name' => 'required|unique:teams|min:2',
            'fa_name' => 'required|unique:teams',
            'mobile' => 'required|unique:teams'
        ],$messages);

        if ($validator->fails()) {
            return response()->json(['hasError'=> true,'errors'=>$validator->messages()], 200);
        }
        else
        {
            //store
            $team=new Team();
            $team->en_name = $data['en_name'];
            $team->fa_name = $data['fa_name'];
            $team->mobile = $data['mobile'];
            $otp = rand(11111,99999);
            $team->otp=$otp;
            if($team->save())
                session([
                    'user_id' => $team->id, 
                    'en_name' => $data['en_name'],
                    'fa_name' => $data['fa_name'],
                    'mobile' => $data['mobile']
                ]);
                SmsSender::verificationCode($otp, $data['mobile']);
                return response()->json([
                    'hasError' => false,
                ]);
            //response

        }

    }

    public function login(Request $request)
    {

        # code...
        $data = $request->all();
        $validator = Validator::make($request->all(),[
            'en_name' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator->messages());
        }
        else
        {
            $team = Team::where('en_name',$data['en_name'])->where('otp' , $data['password'])->first();
            
            if($team)
            {
                session([
                    'user_id'=>$team->id,
                    'en_name' => $team->en_name,
                    'fa_name' => $team->fa_name
                ]);
                
                return redirect()->action('teamController@Dashboard');
            }
            else
            {
                Session::flash('message', "نام کاربری و یا کلمه عبور شما اشتباه است");
                return back();
            }
        }
    }
    public function changeNumber()
    {
        $user_id = session('user_id');

        if($user_id)
        {
            $team = Team::where('id',$user_id)->first();
            if($team->isVerified)
                return redirect('dashboard');
            else
                return view('changeNumber',['mobile_number'=>$team->mobile]);
        }
        else 
        {
            return back();
        }

    }
    public function edit_number(Request $request){
        $validate = Validator::make($request->all(),[
            'mobile_number' => 'required'
        ]);
        if($validate->fails())
        {
            return back();
        }
        else
        {
            $user_id= session('user_id');
            $team = Team::where('id',$user_id)->first();
            $otp = rand(11111,99999);

            if($request->mobile_number!=$team->mobile)
                $team->update([
                    'otp' => $otp,
                    'mobile' => $request->mobile_number
                    ]);
            else
                $team->update([
                    'otp' => $otp,
                    ]);    
            SmsSender::verificationCode($otp, $request->mobile_number);
            return redirect('/VerifyAccount');

        }

    }
    public function resendPassword()
    {
        $user_id= session('user_id');
        $team = Team::where('id',$user_id)->first();
        $otp = rand(11111,99999);
        if($user_id)
        {
            $team->update([
                'otp' => $otp,
                ]);    
            SmsSender::verificationCode($otp, $team->mobile);
            return redirect('/VerifyAccount');
        }
        else 
            return redirect('/');
        

    }
    public function verifyAccount()
    {
        return view('verifyAccount');
    }
    public function verifyCode(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'otp' => 'required'
        ]);
        
        $user_id = session('user_id');

        if($validate->fails())
        {
            return back();
        }
        else
        {
            $otp = Team::where('otp',$request->otp)->where('id',$user_id)->first();

                if($otp && $request->otp!=0)
                {
                    
                    if($otp->update(['isVerified' => 1]))
                        return redirect('dashboard');
                }
                else
                {
                    return response()->json(['errorCode'=>98,'hasError'=> true], 200);
                }
            
        }   
    }

    public function changePassword()
    {
        return view('changePassword');
    }

    public function doChangePassword(Request $request)
    {
        # code...
        
        $validator = Validator::make($request->all(),[
            'current_password' => 'required',
            'new_password' => 'required',
            'new_password_confiramtion'=>'required'

        ]);
        if($validator->fails())
        {
            return back()->withErrors($validator->messages());
        }
        else
        {
            $team = Team::where('id',session('user_id'))->first();
            if($team->otp==$request->current_password)
            {
                $team->update(['otp' => $request->new_password]);
                Session::flash('message', "کلمه عبور شما با موفقیت تغییر یافت");
                Session::flash('type', "success");
                return back();
            }
            else
            {
                Session::flash('type', "danger");
                Session::flash('message', "کلمه عبور فعلی شما صحیح نمی باشد");
                return back();
            }
        }
    }
    public function requestOTP(Request $request)
    {
        $data = $request->all();
        $messages = [
            'required' => 1,
            'unique' => 2,
            'min' => 3
        ];
        $validator = Validator::make($request->all(), [
            'en_name' => 'required'
        ],$messages);

        if ($validator->fails()) {
            return response()->json(['hasError'=> true,'errors'=>$validator->messages()], 200);
        }
        else
        {
            //store
            $team=Team::where('en_name',$data['en_name'])->first();
            if($team)
            {
                
                if($team->update(['otp'=>1234]))
                    return response()->json(['errorCode'=>100,'hasError'=> false,'data' =>[
                        'mobile' => $team->mobile
                    ]], 200);
            }
            else
            {
                return response()->json(['hasError'=> true,'errorCode'=> 3], 200);
                //mobile not exist
            }

        }
        
    }

    public function checkOTP(Request $request)
    {
        $data = $request->all();
        $messages = [
            'required' => 1,
            'unique' => 2,
            'min' => 3
        ];
        $validator = Validator::make($request->all(), [
            'otp' => 'required',
            
            
        ],$messages);

        if ($validator->fails()) {
            return response()->json(['errorCode'=>0,'hasError'=> true,'errors'=>$validator->messages()], 200);
        }
        else
        {
            if ($request->session()->exists('user_id')) {
                //
                $user_id = $request->session()->get('user_id');
                $otp = Team::where('otp',$data['otp'])->where('id',$user_id)->first();
                if($otp && $data['otp']!=0)
                {
                    
                    if($otp->update(['isVerified' => 1]))
                        return response()->json(['errorCode'=>100,'hasError'=> false,'data' => ['fa_name' => $otp->fa_name]], 200);
                }
                else
                {
                    return response()->json(['errorCode'=>98,'hasError'=> true], 200);
                }
            }
            elseif(isset($data['en_name']))
            {
                $otp = Team::where('otp',$data['otp'])->where('en_name',$data['en_name'])->first();
                if($otp && $data['otp']!=0)
                {
                    session(['user_id'=> $otp->id]);
                    return response()->json(['errorCode'=>100,'hasError'=> false], 200);
                }
                else
                {
                    return response()->json(['errorCode'=>98,'hasError'=> true], 200);
                }
            }
            else
            {
                return response()->json(['errorCode'=>99,'hasError'=> true], 200);
            }
            

        }

    }
    


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
         //
         $cv_url="";
         $team_id = session('user_id');
         $validator = Validator::make($request->all(), [
             'cv_url' => 'mimes:pdf,xlx,csv,doc,docx',
            //  'first_name' => 'required',
            //  'last_name' => 'required',
            //  'major' => 'required',
            //  'field' => 'required',
            //  'university' => 'required',
         ],[
             'mimes' => '(doc|docx|pdf|xlx|csv) لطفا فایل با فرمت مناسب وارد نمایید'
         ]);
         
 
         
         if ($validator->fails()) {
             //return response()->json(['errorCode'=>0,'hasError'=> true,'errors'=>$validator->messages()], 200);
             return back()->withErrors($validator->messages());
         }
         else
         {
            if($team_id)
            {
               if($request->file('cv_url'))
               {
                  $fileName = time().'.'.$request->file('cv_url')->getClientOriginalExtension();  
                  $request->file('cv_url')->move(public_path('uploads/resume/'.$team_id."/"), $fileName);
                  $cv_url='uploads/resume/'.$team_id."/".$fileName;
               
               }
                $team = Team::where('id',$team_id);
                $team->update([
                    'team_type' => $request->team_type,
                    'organ_dependence' => $request->organ_dependence,
                    'team_leader_name' => $request->team_leader_name,
                    'team_leader_family' => $request->team_leader_family,
                    'degree' => $request->degree,
                    'major' => $request->major,
                    'university' => $request->university,
                    'cv_url' => $cv_url,
                ]);
                Session::flash('message', "اطلاعات با موفقیت ثبت شد");
                Session::flash('type', "success");
                return back();
            }
         }
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function recoverPassword(Request $request)
    {
        $data = $request->all();
       
        $validator = Validator::make($request->all(), [
            'en_name' => 'required',
            'mobile' => 'required'
            ]);   
        if ($validator->fails()) {
            Session::flash('type', "danger");
            Session::flash('message', "کاربری با چنین مشخصاتی در سیستم یافت نشد");
            return back();
        }
        else
            {
                $team = Team::where('en_name',$data['en_name'])->where('mobile',$data['mobile'])->first();
                if($team)
                {
                    $otp= rand(11111,99999);
                    $team->update(['otp' => $otp]);
                    SmsSender::verificationCode($otp, $data['mobile']);
                    Session::flash('message', "کلمه عبور جدید شما ایجاد و از طریق پیامک برای شما ارسال شد");
                    Session::flash('type', "success");
                    return redirect('login');
                }
                else
                {
                    Session::flash('type', "danger");
                    Session::flash('message', "کاربری با چنین مشخصاتی در سیستم یافت نشد");
                    return back();
                }
            }
    }
    public function check_en_name(Request $request)
    {
        $data = $request->all();
       
        $validator = Validator::make($request->all(), ['en_name' => 'required|unique:teams',]);   
        if ($validator->fails()) {
            echo 'false';
        }
        else
            echo 'true';
    }
    public function check_fa_name(Request $request)
    {
        $data = $request->all();
       
        $validator = Validator::make($request->all(), ['fa_name' => 'required|unique:teams',]);   
        if ($validator->fails()) {
            echo 'false';
        }
        else
            echo 'true';
    }
    public function check_mobile(Request $request)
    {
        $data = $request->all();
       

        $validator = Validator::make($request->all(), ['mobile' => 'required|unique:teams',]);   
        if ($validator->fails()) {
            echo 'false';
        }
        else
            echo 'true';
    }
}