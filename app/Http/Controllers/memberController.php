<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("sections.add_member");
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
        //dd($request->all());
        //dd($request->file('resume')->getMimeType(),$request->file('resume')->getClientOriginalExtension() );
        $cv_url = "";
        $data = $request->all();
        $team_id=$request->session()->exists('user_id');
        $validator = Validator::make($request->all(), [
            'resume' => 'mimes:pdf,xlx,csv,doc,docx',
            'first_name' => 'required',
            'last_name' => 'required',
            'major' => 'required',
            'field' => 'required',
            'university' => 'required',
        ]);
        

        
        if ($validator->fails()) {
            return response()->json(['errorCode'=>0,'hasError'=> true,'errors'=>$validator->messages()], 200);
            return back()->withInput();
        }
        else
        {
            if($request->file('resume')){
                $fileName = time().'.'.$request->file('resume')->getClientOriginalExtension();  
       
                $request->file('resume')->move(public_path('uploads/resume/'.$team_id."/"."members/"), $fileName);
                $cv_url='uploads/resume/'.$team_id."/"."members/".$fileName;
                
            }
            if ($team_id) {
                $member = new Member();
                $member->first_name = $request->first_name;
                $member->last_name = $request->first_name;
                $member->field = $request->field;
                $member->major = $request->major;
                $member->university = $request->university;
                $member->cv_url = $cv_url;
                $member->team_id = $team_id;
                $member->save();
                return back()->withInput(['status' => 'saved']);
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
    public function update(Request $request, $id)
    {
        //
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
        $member = Member::where('id',$id);
        $user_id = session('user_id');
        if($member && $user_id==$member->team->id)
        {
            $member->delete();
            return response()->json(['hasError'=>false,'errorCode' => 100]);
        }
        else
        {
            return response()->json(['hasError'=>true,'errorCode' => 5]);
        }
    }
}
