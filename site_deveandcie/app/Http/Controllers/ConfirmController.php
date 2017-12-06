<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\models\Transfers;

class ConfirmController extends Controller
{
    //Affichage confirmation upload
    public function upload()
    {	
    	return view('confirmup');
    }

    //Affichage confirmation download
    public function download()
    {	
    	return view('confirmdl');
    }

}
