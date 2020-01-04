<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
