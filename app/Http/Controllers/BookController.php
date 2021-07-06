<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    //with is can inner join or other join
    // To reduce the queries
    public function index() {
        $books = Book::select('id', 'title','price')
        ->with('authors')
        ->paginate(10);

        // $email_data = [
        //     'code' => 'asdsda',
        //     'name' => 'syahmi jalil'
        // ];

        // Mail::to('syahmijalil12@gmail.com')->send( new WelcomeEmail($email_data) );
        
        return view('books.listing', ['books' =>$books]);

    }

    public function show($id){
        // display all data
        // $book = Book::all();

        // specific
        // Find can yuse at end of syntax
        $book = Book::with('authors')->find($id);

        return view('books.single', ['book' => $book]);

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
        // books is a function in model
        // We use get because want to modify the statemnt 
        $authors = Author::with('books')->get();

        // all() is static we cant modify the data that we want
        // $authors = Author::all();
        
        return view('books.authors', [
            'authors' => $authors
        ]);
    }
}
