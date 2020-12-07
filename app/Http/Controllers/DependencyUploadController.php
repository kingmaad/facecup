<?php

namespace App\Http\Controllers;

use App\TeamFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\JsonResponse;
use Pion\Laravel\ChunkUpload\Exceptions\UploadMissingFileException;
use Pion\Laravel\ChunkUpload\Handler\AbstractHandler;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

use Pion\Laravel\ChunkUpload\Exceptions\UploadFailedException;
use Storage;

use Illuminate\Http\UploadedFile;


use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;

class DependencyUploadController extends Controller
{
    //
     /**
     * Handles the file upload
     *
     * @param FileReceiver $receiver
     *
     * @return JsonResponse
     *
     * @throws UploadMissingFileException
     *
     */
    public function uploadFile(Request $request)
    {
        
        $receiver = new FileReceiver("file", $request, HandlerFactory::classFromRequest($request));
        // check if the upload is success, throw exception or return response you need
        if ($receiver->isUploaded() === false) {
            throw new UploadMissingFileException();
        }
        // receive the file
        $save = $receiver->receive();

        // check if the upload has finished (in chunk mode it will send smaller files)
        if ($save->isFinished()) {
            
            // save the file and return any response you need
            $team_id = session('user_id');
            $old_file = null;
            // $validate = Validator::make($request->all(),[
            //     'description' => 'required',
            //     'file' => 'required|mimes:zip,tar',
            // ],[
            //     'description.required' => 'لطفا توضیحات را وارد نمایید',
            //     'file.required' => 'لطفا فایل مورد نظر برای آپلود را انتخاب کنید',
            //     'mimes' => '(پسوندهای مجاز: tarو zip) لطفا فایل با پسوند مجاز انتخاب کنید'
            // ]);
            // if($validate->fails())
            // {
            //     return response()->json(['status'=>422,'errors' => $validate->messages()]);
            // }
            // else{
                $file = TeamFile::where('team_id',$team_id)->first();
                if($file)
                {
                    $old_file = $file->file_url;
                    $fileName = $this->saveFile($save->getFile(),$team_id);
                    //$request->file->move(public_path('uploads/resume/'.$team_id."/"), $fileName);
                    $file_url='uploads/resume/'.$team_id."/".$fileName;
                    $file->file_url=$file_url;
                    $file->team_id = $team_id;
                    $file->description =$request->description;
                    if($file->save())
                        {
                            File::delete($old_file);
                            return response()->json(['status'=>200,'success'=>'فایل با موفقیت آپلود شد']);
                        }
                }
                else
                {
                    $fileName = $this->saveFile($save->getFile(),$team_id);
                    $fileupload = new TeamFile();
                    //$request->file->move(public_path('uploads/resume/'.$team_id."/"), $fileName);
                    $file_url='uploads/resume/'.$team_id."/".$fileName;
                    $fileupload->file_url=$file_url;
                    $fileupload->team_id = $team_id;
                    $fileupload->description = $request->description;
                    if($fileupload->save())
                        return response()->json(['status'=>200,'success'=>'فایل با موفقیت آپلود شد']);
                }
                
            //}
            
        }

        // we are in chunk mode, lets send the current progress
        /** @var AbstractHandler $handler */
        $handler = $save->handler();
        return response()->json([
            "done" => $handler->getPercentageDone()
        ]);
    }

        /**
     * Saves the file
     *
     * @param UploadedFile $file
     *
     * @return JsonResponse
     */
    protected function saveFile(UploadedFile $file,$team_id)
    {
        $fileName = $this->createFilename($file);
        // Group files by mime type
        //$mime = str_replace('/', '-', $file->getMimeType());
        // Group files by the date (week
        //$dateFolder = date("Y-m-W");

        // Build the file path
        $filePath = "uploads/resume/{$team_id}/";
        $finalPath = public_path($filePath);

        // move the file name
        $file->move($finalPath, $fileName);

        return $fileName;
    }

    /**
     * Create unique filename for uploaded file
     * @param UploadedFile $file
     * @return string
     */
    protected function createFilename(UploadedFile $file)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = str_replace(".".$extension, "", $file->getClientOriginalName()); // Filename without extension

        // Add timestamp hash to name of the file
        $filename .= "_" . md5(time()) . "." . $extension;

        return $filename;
    }
}
