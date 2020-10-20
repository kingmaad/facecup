<?php

namespace App\Http\Controllers;

use App\Job;
use App\Jobrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Mail;
class indexController extends Controller
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
    }
    public function newsLetter(Request $request)
    {
        # code...
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletter']);
        if($validator->fails())
        {
            return response()->json(['hasError'=> true,'errors'=>$validator->messages()], 200);
        }
        else
        {
            DB::table('newsletter')->insert([
                ['email' => $request->email],
                
            ]);
            return response()->json(['hasError'=> false], 200);
        }
    }

    public function sendMessage(Request $request)
    {
        # code...
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            ]);
        if($validator->fails())
        {
            return response()->json(['hasError'=> true,'errors'=>$validator->messages()], 200);
        }
        else
        {
            DB::table('messages')->insert([
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'message' => $request->message,
                ],
                
            ]);
            $this->basic_email($request->name,$request->email,$request->subject,$request->message);
            return response()->json(['hasError'=> false], 200);
        }
    }
    public function basic_email($name,$mail,$subject,$text) {
        $data = array('text'=>$text);
     
        FacadesMail::send('sections.mail', $data, function($message) use($mail,$subject,$name) {
           $message->to('facecup@nexterafactory.com', 'FaceCup')->subject
              ($subject);
           $message->from($mail,$name);
        });
        
     }
     public function jobs(){
        $jobs= Job::all();
        return view('sections.jobs',['jobs'=>$jobs]);
     }

     public function saveCV(Request $request)
     {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4',
            'cv_file' => 'required|mimes:pdf,xlx,csv,doc,docx',
            'jobs' => 'required',

            ],[
                'mimes' => '(doc|docx|pdf|xlx|csv) لطفا فایل با فرمت مناسب وارد نمایید'
            ]);
        if($validator->fails())
        {
            return back()->withErrors($validator->messages());
        }
        else
        {
            if($request->file('cv_file'))
               {
                  $fileName = time().'.'.$request->file('cv_file')->getClientOriginalExtension();  
                  $request->file('cv_file')->move(public_path('uploads/jobs/resume/'), $fileName);
                  $cv_url='uploads/jobs/resume/'.$fileName;
               
               }
            $jobs = $request->jobs;

            $jobsArray = array();

            foreach($jobs as $job){
                $jobsArray[] = $job;
            }
            $job = New Jobrequest();
            $job->full_name = $request->name;
            $job->cv_url = $cv_url;
            $job->save();
            $job->jobs()->sync($request->jobs);
            Session::flash('message', "رزومه شما با موفقیت ارسال شد");
            Session::flash('type', "success");
            return back();
        }
     }
}
