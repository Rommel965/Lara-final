<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{
  
    public function contacto()
    {
       return view ('registro');
    }
}
