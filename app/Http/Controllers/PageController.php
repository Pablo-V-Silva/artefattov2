<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  // Return HomePage
  public function index()
  {
    //code
    return view('home');
  }

  public function about()
  {
    //code
    return view('about');
  }
}
