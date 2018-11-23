<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function WelcomePage(){
        return view('welcome');
    }
    public function getInterships(){
        $interships = App\Internship::all();
        return view('interships')->with([
            'interships' => $interships
        ]);
    }
}
