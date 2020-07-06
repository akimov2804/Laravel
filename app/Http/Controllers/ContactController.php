<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $req){
      $validation = $req->validate([
        'name' => 'required',
        'email' => 'required|email',
        'theme' => 'required|min:5|max:20',
        'message' => 'required|min:5|max:500'
      ]);
    }
}
