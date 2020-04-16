<?php

namespace App\Http\Controllers;

use App\Movement;
use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;

class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movements = Movement::all();
        return view('movements.index', compact('movements')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movements = Movement::all();
        return view('movements.create', compact('movements')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movements = new Movement; 

        $movements->user_id = $request->user_id;
        $movements->book_id = $request->book_id;
        $movements->state = $request->state;

        $movements->save();

        return redirect('/movements')->with('message','Saved with Succes!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movement  $movement
     * @return \Illuminate\Http\Response
     */
    public function show(Movement $movement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movement  $movement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movements = Movement::find($id);
        return view('movements.update',['movements'=>$movements]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movement  $movement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $movements = Movement::find($id);

        $movements->user_id = $request->user_id;
        $movements->book_id = $request->book_id;
        $movements->state = $request->state;

        $movements->save();

        Session::flash('message', 'Edited with Succes !');
        return Redirect::to('movements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movement  $movement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movements = Movement::find($id);
        $movements->delete();

        Session::flash('message', 'Deleted with Succes !');
        return Redirect::to('movements');
    }
}
