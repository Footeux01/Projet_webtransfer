<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\models\Transfers;

class HomePageController extends Controller
{
    //
    public function index()
    {	
    	//$t = Transfers::find(1);
    	//return($t->dest_message);
    	return view('welcome');
    }
}
