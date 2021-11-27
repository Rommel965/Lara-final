<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class pruebaController extends Controller
{
  
    public function registro()
    {
      return view('registro');

    }
}