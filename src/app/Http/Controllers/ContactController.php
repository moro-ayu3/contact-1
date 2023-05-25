<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(ContactRequest $request)
   {
      return view('index');
   }
}
