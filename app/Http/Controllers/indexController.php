<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Job;
use App\Jobrequest;
use App\Post;
use App\Sponsor;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Response;
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
        $sponsors = Sponsor::all();
        $faqs = Faq::all();
        return view('index',['sponsors' => $sponsors,'faqs'=>$faqs]);
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
            'email' => 'required|email|unique:newsletter'],[
                'email.unique' => 'شما قبلا در خبرنامه ثبت نام کرده اید'
            ]);
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
        foreach($jobs as $job)
            $job->level = explode(',',$job->level);
        return view('sections.jobs',['jobs'=>$jobs]);
     }

     public function faq(){
        $faqs= Faq::all();
        return view('sections.faq',['faqs'=>$faqs]);
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

     public function get_files()
     {
         # code...
         $team = Team::where('id',session('user_id'))->first();
         $updated = false;
         if($team->team_type!=null)
            $updated = true;
         return view('files',['updated' => $updated]);
     }

     public function get_docker_file()
     {
         # code...
         if(session('user_id')!=null)
         {
            $team = Team::where('id',session('user_id'))->first();
            if($team->team_type!=null)
            {
                $file = File::get(public_path('files/docker.zip'));
                $response = Response::make($file, 200);
                $response->header('Content-Type', 'application/zip');
                $response->header("Content-Disposition","attachment");
                $response->header("Content-length",File::size(public_path('files/docker.zip')));
                $response->header("Pragma","no-cache"); 
                $response->header("Expires","0"); 
                return $response;
            }
         }
         else
         {
             redirect('/');
         }
     }

     public function get_dataset_file()
     {
         # code...
         if(session('user_id')!=null)
         {
            $team = Team::where('id',session('user_id'))->first();
            if($team->team_type!=null)
            {
                $file = File::get(public_path('files/dataset.zip'));
                $response = Response::make($file, 200);
                $response->header('Content-Type', 'application/zip');
                $response->header("Content-Disposition","attachment");
                $response->header("Content-length",File::size(public_path('files/dataset.zip')));
                $response->header("Pragma","no-cache"); 
                $response->header("Expires","0"); 
                return $response;
            }
         }
         else
         {
             redirect('/');
         }
         
     }
     public function get_second_dataset_file()
     {
         # code...
         if(session('user_id')!=null)
         {
            $team = Team::where('id',session('user_id'))->first();
            if($team->team_type!=null)
            {
                $file = File::get(public_path('files/dataset2.zip'));
                $response = Response::make($file, 200);
                $response->header('Content-Type', 'application/zip');
                $response->header("Content-Disposition","attachment");
                $response->header("Content-length",File::size(public_path('files/dataset2.zip')));
                $response->header("Pragma","no-cache"); 
                $response->header("Expires","0"); 
                return $response;
            }
         }
         else
         {
             redirect('/');
         }
         
     }
     public function blog()
     {
         $posts = Post::orderBy('created_at', 'DESC')->get();
         return view('blog',['posts'=>$posts]);
     }

     public function post_detail($id)
     {
         $post = Post::where('id',$id)->first();
         return view('sections.blog-post',['post' => $post]);
     }
}
