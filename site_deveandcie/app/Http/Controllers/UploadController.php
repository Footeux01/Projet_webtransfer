<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\models\Transfers;

class UploadController extends Controller
{
    //
    public function send(Request $request)
    {	
        //Incription dans la database
        $transfer = new Transfers($request->except('csrf_token'));
        $transfer->save();
        
    	
        //Copier le fichier
        //$path = Storage::disk('upload')->store($request->file_name);
        $path = $request->file_name->store('/', 'upload');
        dd($path);
    	

    	return $request->input('file_name') . ' ' . $request->input('exp_mail') . ' ' . $request->input('dest_mail') . ' ' . $request->input('dest_message');
    	// return view('confirmup');

    }
}
