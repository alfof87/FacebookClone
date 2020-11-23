<?php

namespace App\Http\Controllers;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
      $conts = Profile::all();
      return view('index', compact('conts'));
    }
    public function show($id){
      $cont = Profile::findOrFail($id);
      return view('show', compact('cont'));
    }
}
