<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
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
            'degree' => $team->degree,
            'major' => $team->major,
            'university' => $team->university,    
            'members' => $team->members,
            ]);
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
            //$team->otp=rand(1111,9999);
            $team->otp=1234;
            if($team->save())
                session([
                    'user_id' => $team->id, 
                    'en_name' => $data['en_name'],
                    'fa_name' => $data['fa_name'],
                    'mobile' => $data['mobile']
                ]);
                return response()->json([
                    'hasError' => false,
                ]);
            //response

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
                    
                    if($otp->update(['isVerified' => 1,'otp'=>0]))
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
         $request->validate([
             'cv_url' => 'mimes:pdf,xlx,csv,docx,doc|max:2048',
         ]);
   
         if($request->file('cv_url'))
         {
            $fileName = time().'.'.$request->file('cv_url')->getClientOriginalExtension();  
            $request->file('cv_url')->move(public_path('uploads/resume/'.$team_id."/"), $fileName);
            $cv_url='uploads/resume/'.$team_id."/".$fileName;
         
         }
         
         if($team_id)
         {
             echo $team_id;
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
             ]
 
             );
             return back();
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