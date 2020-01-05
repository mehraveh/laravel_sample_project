<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Http\Request;
use DB;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('publisher');
            $table->integer('owner_id')->unsigned();
            #$table->foreign('owner_id')->references('id')->on('users');
            $table->string('author');
            $table->string('code');

        });
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $username)
    {
        $name = $request->get('name');
        $publisher =  $request->get('publisher');
        $author =  $request->get('author');
        $code = $request->get('code');
        $us = DB::table('users')->where('name', $username)->first();
        $res = DB::insert('insert into book (name, publisher, author, code, owner_id) values (?, ?, ?, ?, ?)', [$name, $publisher, $author, $code, $us->id]);
        $p = DB::table('book')->where('name', $name)->first();
        return ["name" => $name, "publisher" => $publisher, "author"=> $author, "code" => $code, "owner" => $us->name];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add_book()
    {
        //return "rrr";
        return view('add-book');
    }

    public function drop(){

        Schema::drop('book');
        return ["message" => "dropped successfully"];
    }
}
