<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;

class IndexController extends Controller
{
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('welcome');
        
    }
    public function mahasiswa()
    {
        return view('mahasiswa');
    }
    
    public function nilai()
    {
        return view('nilai');
    }
    public function atribut()
    {
        return view('atribut');
    }
    public function rules()
    {
        return view('rules');
    }
}   