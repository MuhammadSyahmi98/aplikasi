<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        // $user = Auth::user();

        // if(!Auth::check()) {

        // } else {

        // }

        return view('dashboard');
    }

    public function test(){
        
        $books = DB::select('SELECT * FROM books where id = ?', [2]);

        dd($books);
    }
}
