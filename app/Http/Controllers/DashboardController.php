<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function _constract(){
    $this->middleware(['guest']);
  }
    public function index()
    {

      return view('auth.dashboard');
    }

}
