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
        //Incription de la demande dans la database
        $transfer = new Transfers($request->except('csrf_token'));
        $transfer->save();
        
    	
        //Enregistrement du fichier sélectionné
        //$path = Storage::disk('upload')->store($request->file_name);
        $path = $request->file_name->store('/', 'upload');
        dd($path);
    	
        //Envoi du mail avec le lien vers le fichier
    	

        //Test du retour des champs du formulaire (à virer)
        return $request->input('file_name') . ' ' . $request->input('exp_mail') . ' ' . $request->input('dest_mail') . ' ' . $request->input('dest_message');
    	   // return view('confirmup');

    }
}
