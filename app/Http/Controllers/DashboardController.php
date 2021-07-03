<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function test(){
        
        $books = DB::select('SELECT * FROM books where id = ?', [2]);;

        dd($books);
    }
}
