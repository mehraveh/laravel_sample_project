<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('user')->get();
        echo $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('password');
            $table->string('phone');
        });
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $username = $request->get('username');
        $password =  $request->get('password');
        $phone =  $request->get('phone');
        $res = DB::insert('insert into user (username, password, phone) values (?, ?, ?)', [$username, $password, $phone]);
        $p = DB::table('user')->where('username', $username)->first();
        return ["username" => $username, "phone" => "phone"];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $p = DB::table('user')->where('username', $username)->first();
        return ["title" => "show", "password" => $p->password, "phone" => $p->phone];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    {
        return view('update_form', ['username' => $username]);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $username)
    {
        $password =  $request->get('password');
        $phone =  $request->get('phone');
        $p = DB::table('user')->where('username', $username)->update(['password' => $password, "phone" => $phone]);
        return ["message" => "updated successfully", "username" => $username, "password" => $password];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($username)
    {
        $p = DB::table('user')->where('username', $username)->delete();
        return ["message" => "deleted successfully", "username" => $username];
    }
    public function drop(){

        Schema::drop('user');
        return ["message" => "dropped successfully"];
    }
}
