<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PoliMemesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


$genres = array('comedy','horror','romance');
$text['comedy'][0] = array( 'duration' => '10', 'start' => '0', 'end' => '10', 'text' => 'aaaaaaaaa');
$text['comedy'][1] = array( 'duration' => '10', 'start' => '10', 'end' => '20', 'text' => 'bbbb');
$text['comedy'][2] = array( 'duration' => '140', 'start' => '20', 'end' => '160', 'text' => 'cccccccc');
$text['horror'][0] = array( 'duration' => '5', 'start' => '0', 'end' => '5', 'text' => 'fadfda');
$text['horror'][1] = array( 'duration' => '300', 'start' => '5', 'end' => '305', 'text' => 'afadfdafadfadfadfadf');
$text['romance'][0] = array( 'duration' => '120', 'start' => '0', 'end' => '120', 'text' => '5555555555555');

    	return view('ccmashup.home', compact('genres', 'text'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
