<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;


class BookController extends Controller
{
    //with is can inner join or other join
    // To reduce the queries
    public function index() {
        $books = Book::select('id', 'title','price', 'author_id')
        ->with('author')
        ->paginate(10);
        
        return view('books.listing', ['books' =>$books]);

    }

    public function show($id){
        // display all data
        // $book = Book::all();

        // specific
        $book = Book::find($id);

        return view('books.single', ['book' =>$book]);

        // 
        // dd($book);
    }

    public function edit($id){
        $book = Book::findOrFail($id);
        
        return view('books.edit', [
            // data in array
            'book' => $book
        ]);

    }

    public function update(Request $request, $id){
        $book = Book::findOrFail($id);

        // dd($request);
        // validate data
        $validate_date = $request->validate([
            'title' => 'required|min:5|max:255',
            'synopsis' => 'required|min:5|max:1000',
            'price' => 'required|numeric'
        ]);
        
        $book->title = $request->title;
        $book->price = $request->price;
        $book->synopsis = $request->synopsis;

        $book->save();

        return back()->with('success', 'Book has been updated');

    }


    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        // dd($request);

        $validate_date = $request->validate([
            'title' => 'required|min:5|max:255',
            'synopsis' => 'required|min:5|max:1000',
            'price' => 'required|numeric'
        ]);

        $book = Book::create([
            'title' => $request->title,
            'price' => $request->price,
            'synopsis' => $request->synopsis
            ]
        );

        return redirect()->route('book-listing')->with('success', 'Your book be added.');
    }

    public function destroy($id){
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('book-listing')->with('success', 'Your book be deleted.');
    }

    public function authors() {
        $authors = Author::all();
        
        return view('books.authors', [
            'authors' => $authors
        ]);
    }
}
