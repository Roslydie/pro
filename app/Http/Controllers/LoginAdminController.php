<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    public function show_admin()
    {
      
         return view('admin');
    }
}
