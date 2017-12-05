<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Transfers;

class HomePageController extends Controller
{
    //
    public function index()
    {	
    	$Transfer = Transfers::find(1);
    	return($Tranfer->dest_message);
    	//return view('welcome');
    }
}
