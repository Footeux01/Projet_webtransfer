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
        //Incription des champs du formulaire dans la database sauf "token" et "nom du fichier"
        $transfer = new Transfers($request->except('csrf_token','file_name'));

        //Enregistrement le nom du fichier sélectionné
        $fname = Storage::disk('upload')->put('', $request->file_name);

        //Inscription du nom du fichier dans la database
        $transfer->file_name = $fname;

        //Enregistre les informations dans la database
        $transfer->save();

        //Envoi du mail avec le lien vers le fichier
        
        //return redirect()->route('confirmup',compact('transfer'));
    	return view('confirmup', compact('transfer'));

    }
}
