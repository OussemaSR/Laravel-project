<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FileUploadController extends Controller
{

    function upload(Request $request){

        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);

        $file = $request->file('file');
        $file_name = $file->getClientOriginalName();
        $path = $request->file('file')->store('uploads','public');
    
        $output = array(
         'success' => '1',
         'file_name' => $file_name,
         'file'  => asset('storage/'.$path),
         'path'  => $path
        );

        return response()->json($output);
    

    }
    function delete(Request $request){
        $dd = $request->data['image'];
        if(!is_null($dd)){
            Storage::delete('public/'.$dd);
        }
        return response()->json($dd);
    }
}
