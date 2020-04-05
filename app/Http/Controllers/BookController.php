<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        return view('books.create', compact('books')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $books = new Book; 
     
        $books->name = $request->name;
        $books->author = $request->author;
        $books->subject = $request->subject;
        $books->date = $request->date;
        $books->description = $request->description;
 
        $books->save();
     
        return redirect('/books')->with('message','Saved with Succes!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        // metodo q voy a usar para visualizar a cacda libro en particular en una vista especial
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
   //EL ORIGINAL public function edit(Book $book)
    public function edit($id)
    {
        $books = Book::find($id);
        return view('books.update',['books'=>$books]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $books = Book::find($id);

        $books->name = $request->name;
        $books->author = $request->author;
        $books->subject = $request->subject;
        $books->date = $request->date;
        $books->description = $request->description;

        $books->save();

        Session::flash('message', 'Edited with Succes !');
        return Redirect::to('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books->delete();

        Session::flash('message', 'Deleted with Succes !');
        return Redirect::to('books');
    }
}
