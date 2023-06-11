<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class D_B extends Controller
{
    function select()
    {
        $givendate= DB::table('homework')->where('subject','TOC')->pluck('given_date');
        $no= DB::table('homework')->count();
       $deadline= DB::table('homework')->pluck('death_line');
        return view('Student/TOC',['No'=> $no,'givendate'=>$givendate,'deathline'=>$deadline]);  

    }
}
