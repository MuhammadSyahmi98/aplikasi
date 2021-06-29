<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadualController extends Controller
{
 public function index($subject) {
     echo "<h1>Ini controller - $subject </h1>";
 }
}
