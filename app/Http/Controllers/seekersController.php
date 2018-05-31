<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seekersController extends Controller
{
    public function message(){
      return view('s_page.message');
    }
    public function doctors(){
      return view('s_page.s_doctors');
    }
}
