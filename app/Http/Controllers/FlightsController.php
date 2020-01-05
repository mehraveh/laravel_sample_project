<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightsController extends Controller
{
      public function find($name)
    {

	   	$p = DB::table('flights')->where('name', $name)->first();
	   	if(!$p)
	   	{
	   		return 'flight dosent exist';
	   	}
	    return $p->airline;
   }


   public function add($name, $airline){	
   	
	   	$po = DB::insert('insert into flights (name, airline) values (?, ?)', [$name, $airline]);
	   	$p = DB::table('flights')->where('name', $name)->first();
	    return $p->id;
   }
}
