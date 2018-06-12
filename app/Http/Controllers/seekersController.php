<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class seekersController extends Controller
{
    public function message(){
      return view('s_page.message');
    }
    public function msg_sent(){
      return view('s_page.msg_sent');
    }
    public function msg_trash(){

      return view('s_page.msg_trash');
    }
    public function msg_compose(){
      return view('s_page.msg_compose');
    }
    public function doctors(){
      return view('s_page.s_doctors');
    }
    public function prescriptions(){
      return view('s_page.s_prescription');
    }
    public function transac_hys(){
      return view('s_page.transac_hys');
    }
}
