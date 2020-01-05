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
        $users = DB::table('users')->get();
        echo $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('password');
            $table->string('email');
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
        $name = $request->get('name');
        $password =  $request->get('password');
        $phone =  $request->get('email');
        $res = DB::insert('insert into users (name, password, email) values (?, ?, ?)', [$name, $password, $email]);
        $p = DB::table('users')->where('name', $name)->first();
        return ["name" => $name, "phone" => "phone"];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $p = DB::table('users')->where('name', $name)->first();
        return ["title" => "show", "name" => $p->name, "email" => $p->email];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        return view('update_form', ['name' => $name]);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
        $this->middleware('guest');
        $password =  $request->get('password');
        $email =  $request->get('email');
        $p = DB::table('users')->where('name', $name)->update(['password' => $password, "email" => $email]);
        return ["message" => "updated successfully", "name" => $name, "email" => $email];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {
        $p = DB::table('users')->where('name', $name)->delete();
        return ["message" => "deleted successfully", "name" => $name];
    }
    public function drop(){

        Schema::drop('user');
        return ["message" => "dropped successfully"];
    }
    public function show_tables(){
        $tables = DB::select('SHOW TABLES');
        return $tables;
    }
}
