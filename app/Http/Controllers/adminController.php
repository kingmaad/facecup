<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use App\Jobrequest;
use App\Sponsor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
        $job = Job::find($id)->first();
        if($job)
        {
            $companies = Company::all();
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
            //$job= Job::find($request->id);
            $job = Job::where('id',$request->id);
            $job->update([
                'title' => $request->title,
                'description' => $request->description,
                'company_id' => $request->company_id,
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
            $job->save();
            return redirect('/administrator/job/list');
        }
        
    }
    public function job_delete($id)
    {
        $job = Job::find($id)->first();
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
        $company = Company::find($id)->first();
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
            //$job= Job::find($request->id);
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
        $company = Company::find($id)->first();
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
        return view('admin.jobs',['sponsors' => $sponsors]);
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
