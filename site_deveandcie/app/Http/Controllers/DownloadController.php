<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Transfers;

class DownloadController extends Controller
{
    //
    public function send($id_transfer)
    {	
    	//récupérer les infos dans la bdd à partir de l'id_transfer
    	$transfer = Transfers::find($id_transfer);

    	// affichage
    	return view('download',compact('transfer'));


    }
}
