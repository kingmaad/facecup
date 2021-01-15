<?php

namespace App\Http\Controllers;

use App\TeamFile;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class FileUploadController extends Controller
{
    //
    public function fileUpload()
    {
        $team= Team::where('id',session('user_id'))->first();
        
        if($team->file)
        {
            $description = $team->file->description;
            $file_name = explode("/",$team->file->file_url);
            $size =File::size($team->file->file_url)/1024/1024;
            $size = number_format($size, 2);
            return view('fileUpload',['name' => $file_name[count($file_name)-1],'size' => $size,'description' => $description]);
        }
        else
            return view('fileUpload');

        
    }

    public function fileStore(Request $request)
    {
        
        $team_id = session('user_id');
        $old_file = null;
        $validate = Validator::make($request->all(),[
            'description' => 'required',
            'file' => 'required|mimes:zip,tar',
        ],[
            'description.required' => 'لطفا توضیحات را وارد نمایید',
            'file.required' => 'لطفا فایل مورد نظر برای آپلود را انتخاب کنید',
            'mimes' => '(پسوندهای مجاز: tarو zip) لطفا فایل با پسوند مجاز انتخاب کنید'
        ]);
        if($validate->fails())
        {
            return response()->json(['status'=>422,'errors' => $validate->messages()]);
        }
        else{
            $file = TeamFile::where('team_id',$team_id)->first();
            if($file)
            {
                $old_file = $file->file_url;
                $fileName = time().'.'.$request->file('file')->getClientOriginalExtension();  
                $request->file->move(public_path('uploads/resume/'.$team_id."/"), $fileName);
                $file_url='uploads/resume/'.$team_id."/".$fileName;
                $file->file_url=$file_url;
                $file->team_id = $team_id;
                $file->description = $request->description;
                if($file->save())
                    {
                        File::delete($old_file);
                        return response()->json(['status'=>200,'success'=>'فایل با موفقیت آپلود شد']);
                    }
            }
            else
            {
                $fileName = time().'.'.$request->file('file')->getClientOriginalExtension();  
                $fileupload = new TeamFile();
                $request->file->move(public_path('uploads/resume/'.$team_id."/"), $fileName);
                $file_url='uploads/resume/'.$team_id."/".$fileName;
                $fileupload->file_url=$file_url;
                $fileupload->team_id = $team_id;
                $fileupload->description = $request->description;
                if($fileupload->save())
                    return response()->json(['status'=>200,'success'=>'فایل با موفقیت آپلود شد']);
            }
            
        }
        
    }
}
