<?php

namespace App\Http\Controllers;

use App\Company;
use App\Faq;
use App\Job;
use App\Jobrequest;
use App\Post;
use App\Sponsor;
use App\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Morilog\Jalali\Jalalian;

class adminController extends Controller
{
    public function login(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required'
        ]);
        if($validate->fails())
        {
            dd($validate->messages());
            return back();
        }
        else
        {
            $validate_admin = DB::table('users')
                            ->where('email', $request->email)
                            ->first();

            if ($validate_admin && Hash::check($request->password, $validate_admin->password)) {
                session([
                    'user_id' => $validate_admin->id,
                    'name' => $validate_admin->name
                    ]);
                return redirect('/administrator/dashboard');
                
                
            }
            else
            {
                return back();
            }
        }
    }

    public function jobs()
    {
        # code...
        $jobs = Job::all();
        return view('admin.jobs',['jobs' => $jobs]);
    }

    public function job_edit($id)
    {
        $job = Job::where('id',$id)->first();
        if($job)
        {
            $companies = Company::all();
            $job->level = explode(',',$job->level);
            return view('admin.job_edit',['job'=>$job,'companies' => $companies]);
        }
        else{
            return back();
        }
    }
    public function job_update(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'company_id' => 'required',
            
        ]);
        if($validate->fails())
        {
            return back();
        }
        else{
            
            if($request->has('level'))
                $level = implode(",", $request->level);
            else
                $level = null;
            $job = Job::where('id',$request->id);
            $job->update([
                'title' => $request->title,
                'description' => $request->description,
                'company_id' => $request->company_id,
                'level' => $level,
                'expired' => $request->expired ? 1:0
            ]);
            return back();
        }
    }

    public function job_add()
    {
        $companies = Company::all();
        return view('admin.job_add',['companies' => $companies]);
    }

    public function job_create(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'company_id' => 'required'
        ]);

        if($validate->fails())
        {
            return back();
        }
        else
        {
            $job = new Job();
            $job->title= $request->title;
            $job->description=$request->description;
            $job->company_id = $request->company_id;
            $job->expired = $request->expired ? 1 :0;
            if($request->has('level'))
                $level = implode(",", $request->level);
            else
                $level = null;
            $job->level = $level;
            $job->save();
            return redirect('/administrator/job/list');
        }
        
    }
    public function job_delete($id)
    {
        $job = Job::where('id',$id)->first();
        if($job)
        {
            Job::where('id',$id)->delete();
            return back();
        }
        else{
            return back();
        }
    }
    public function companies()
    {
        $companies = Company::all();
        return view('admin.companies_list',['companies' => $companies]);
    }

    public function company_edit($id)
    {
        $company = Company::where('id',$id)->first();
        if($company)
        {
            return view('admin.company_edit',['company'=>$company]);
        }
        else{
            return back();
        }
    }

    public function company_update(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'company_name' => 'required',
            
        ]);
        if($validate->fails())
        {
            return back();
        }
        else{
            
            $company = Company::where('id',$request->id);
            $company->update([
                'company_name' => $request->company_name,
                
            ]);
            return back();
        }
    }

    public function company_add()
    {
        return view('admin.company_add');
    }

    public function company_create(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'company_name' => 'required',
            
        ]);

        if($validate->fails())
        {
            return back();
        }
        else
        {
            $company = new Company();
            $company->company_name= $request->company_name;
            $company->save();
            return redirect('/administrator/company/list');
        }
        
    }

    public function company_delete($id)
    {
        $company = Company::where('id',$id)->first();
        if($company)
        {
            Job::where('company_id',$id)->delete();
            $company->delete();
            return back();
        }
        else{
            return back();
        }
    }

    public function faqs()
    {
        $faqs = Faq::all();
        return view('admin.faq_list',['faqs' => $faqs]);
    }

    public function faq_edit($id)
    {
        $faq = Faq::where('id',$id)->first();
        if($faq)
        {
            return view('admin.faq_edit',['faq'=>$faq]);
        }
        else{
            return back();
        }
    }

    public function faq_update(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'id' => 'required',
            'answer' => 'required',
            'question' => 'required',
            
        ]);
        if($validate->fails())
        {
            return back();
        }
        else{
            
            $faq = Faq::where('id',$request->id);
            $faq->update([
                'question' => $request->question,
                'answer' => $request->answer,
            ]);
            return redirect('/administrator/faq/list');
        }
    }

    public function faq_add()
    {
        return view('admin.faq_add');
    }

    public function faq_create(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'answer' => 'required',
            'question' => 'required',
            
        ]);

        if($validate->fails())
        {
            return back();
        }
        else
        {
            $faq = new Faq();
            $faq->question= $request->question;
            $faq->answer= $request->answer;
            $faq->save();
            return redirect('/administrator/faq/list');
        }
        
    }

    public function faq_delete($id)
    {
        $faq = Faq::where('id',$id)->first();
        if($faq)
        {
            $faq->delete();
            return back();
        }
        else{
            return back();
        }
    }

    public function resumes()
    {
        # code...
        $resumes= Jobrequest::all();
        return view('admin.resumes_list',['resumes'=>$resumes]);
    }
    public function sponsors()
    {
        # code...
        $sponsors = Sponsor::all();
        return view('admin.sponsors',['sponsors' => $sponsors]);
    }

    public function sponsor_add(Type $var = null)
    {
        # code...
        return view('admin.sponsor_add');
    }
    public function sponsor_create(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'title' => 'required',
            'website_url' => 'required',
            'img_url' => 'required|mimes:jpg,jpeg,png,svg',
            'type' => 'required'
        ]);
        if($validate->fails())
        {
            dd($validate->messages());
            return back();
        }
        else{
            $sponsor = new Sponsor();
            $sponsor->title = $request->title;
            $sponsor->type = $request->type;
            $sponsor->website_url = $request->website_url;
            
            $fileName = time().'.'.$request->file('img_url')->getClientOriginalExtension();  
            $request->file('img_url')->move(public_path('img/supporters/'), $fileName);
            $img_url='img/supporters/'.$fileName;
            $sponsor->img_url=$img_url;
            if($sponsor->save())
                return redirect('/administrator/sponsor/list');

        }

    }

    public function sponsor_edit($id)
    {

        return view('admin.sponsor_edit',['sponsor' => Sponsor::where('id',$id)->first()]);
    }

    public function sponsor_update(Request $request)
    {

        $validate = Validator::make($request->all(),[
            'id' => 'required',
            'title' => 'required',
            'website_url' => 'required',
            'img_url' => 'mimes:jpg,jpeg,png,svg',
            'type' => 'required'
        ]);
        if($validate->fails())
        {
            dd($validate->messages());
            return back();
        }
        else{
            $sponsor = Sponsor::where('id',$request->id)->first();
            $sponsor->title = $request->title;
            $sponsor->type = $request->type;
            $sponsor->website_url = $request->website_url;
            if($request->img_url)
            {
                File::delete($sponsor->img_url);
                $fileName = time().'.'.$request->file('img_url')->getClientOriginalExtension();  
                $request->file('img_url')->move(public_path('img/supporters/'), $fileName);
                $img_url='img/supporters/'.$fileName;
                $sponsor->img_url=$img_url;
            }
            
            if($sponsor->save())
                return redirect('/administrator/sponsor/list');

        }
    }

    public function sponsor_delete($id)
    {
        
        $sponsor = $sponsor = Sponsor::where('id',$id)->first();
        if($sponsor)
        {
            
            $sponsor->delete();
            return back();
        }
        else{
            return back();
        }
    }


    public function teams()
    {
        $teams = Team::all();
        foreach($teams as $team)
            $team->created_at = Jalalian::fromDateTime($team->created_at);
        return view('admin.teams',['teams' => $teams]);

    }

    public function team_detail($id)
    {
        $team = Team::where('id',$id)->first();
        return view('admin.team_detail',['team'=>$team]);
    }

    public function team_delete($id)
    {
        $team = Team::where('id',$id);
        if($team)
        {
            
            $team->delete();
            return back();
        }
        else{
            return back();
        }
    }
    public function team_exports($type)
    {
        $teams = Team::all($type);
        $contents = '';
        foreach($teams as $team)
            $contents.=$team->mobile.",";
        
        $filename = 'mobile_numbers.txt';
        return response()->streamDownload(function () use ($contents) {
            echo $contents;
        }, $filename);
    }
    public function team_update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'en_name' => 'required|unique:teams,en_name,'.$request->id,
            'id' => 'required'
            ]
            ,[
                'en_name.unique' => 'این اسم تکراری می باشد'
            ]);
        if($validator->fails())
        {
            return response()->json(['hasError'=> true,'errors'=>$validator->messages()], 200);
        }
        else
        {
            $team = Team::where('id',$request->id)->first();
            $team->en_name = $request->en_name;
            $team->save();
            return response()->json(['hasError'=> false], 200);
        }
    }
    public function posts()
    {
        $posts = Post::all();
        return view('admin.blog_list',['posts' => $posts]);
    }
    public function post_add()
    {
        return view('admin.blog_new');
    }
    
    public function post_create(Request $request)
    {

        $validate = Validator::make($request->all(),[
            'title' => 'required',
            'body' => 'required',
            'abstract' => 'required',
            'img' => 'required|mimes:jpg,jpeg,png,svg|dimensions:ratio=1/1',
        ],[
            'title.required' => 'لطفا عنوان پست را وارد نمایید',
            'body.required' => 'لطفا متن پست را وارد نمایید',
            'abstract.required' => 'لطفا چکیده متن پست را وارد نمایید',
            'img.required' => 'لطفا تصویری برای پست انتخاب کنید',
            'mimes' => '(jpg,jpeg,png,svg) لطفا فایل با فرمت مناسب وارد نمایید',
            'dimensions' => 'لطفا یک تصویر با طول و عرض برابر(مربعی شکل) وارد نمایید'
        ]);
        if($validate->fails())
        {
            return back()->withErrors($validate->messages());
        }
        else{
            $post = new Post();
            $post->title = $request->title;
            $post->body = $request->body;
            $post->abstract = $request->abstract;
            $post->permalink = $request->permalink;
            $post->img = 'url';
            if($request->img)
            {
                File::delete($post->img);
                $fileName = time().'.'.$request->file('img')->getClientOriginalExtension();  
                $request->file('img')->move(public_path('img/posts/'), $fileName);
                $img_url='img/posts/'.$fileName;
                $post->img=$img_url;
            }
            $post->save();
            return back();
        }
        
    }

    public function post_edit($id)
    {
        $post = Post::where('id',$id)->first();
        return view('admin.blog_edit',['post' => $post]);
    }

    public function post_update(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'id' => 'required',
            'title' => 'required',
            'body' => 'required',
            'abstract' => 'required',
            'img' => 'mimes:jpg,jpeg,png,svg|dimensions:ratio=1/1',
            
        ],[
            'title.required' => 'لطفا عنوان پست را وارد نمایید',
            'body.required' => 'لطفا متن پست را وارد نمایید',
            'abstract.required' => 'لطفا چکیده متن پست را وارد نمایید',
            'mimes' => '(jpg,jpeg,png,svg) لطفا فایل با فرمت مناسب وارد نمایید',
            'dimensions' => 'لطفا یک تصویر با طول و عرض برابر(مربعی شکل) وارد نمایید'
        ]);

        if($validate->fails())
        {
            return back()->withErrors($validate->messages());
        }
        else{
            $post = Post::where('id',$request->id)->first();
            $post->title = $request->title;
            $post->body = $request->body;
            $post->abstract = $request->abstract;
            $post->permalink = $request->permalink;
            if($request->img)
            {

                $fileName = time().'.'.$request->file('img')->getClientOriginalExtension();  
                $request->file('img')->move(public_path('img/posts/'), $fileName);
                $img_url='img/posts/'.$fileName;
                $post->img=$img_url;
            }
            $post->save();
            return redirect('/administrator/post/list');
        }
    }

    public function post_delete($id)
    {
        $post = Post::where('id',$id);
        if($post)
        {
            $post->delete();
            return back();
        }
        else{
            return back();
        }
    }
    public function newsletter()
    {
        $newsletters = DB::table('newsletter')->select()->get();
        return view('admin.newsletter',['newsletters' => $newsletters]);
    }

    public function newsletter_exports($type)
    {
        $newsletters = DB::table('newsletter')->select($type)->get();
        $contents = '';
        foreach($newsletters as $newsletter)
            $contents.=$newsletter->email.",";
        
        $filename = 'newsletters.txt';
        return response()->streamDownload(function () use ($contents) {
            echo $contents;
        }, $filename);
    }
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
}
