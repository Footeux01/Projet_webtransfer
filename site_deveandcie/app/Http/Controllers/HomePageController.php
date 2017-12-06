<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Transfers;

class HomePageController extends Controller
{
    //
    public function index()
    {	
    	$Transfer = transfers::find(1);
    	return($Transfer->dest_message);
    	//return view('welcome');
    }
}
