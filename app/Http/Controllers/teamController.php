<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
            $team->otp=rand(1111,9999);
            if($team->save())
                return response()->json([
                    'hasError' => false,
                ]);
            //response

        }

        
            
            
    }
        //validation


    

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
