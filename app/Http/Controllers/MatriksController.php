<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matrik;

class MatriksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function result()
    {
        $data=Matrik::all();
        return view ('result' ,['matrik'=>$data]);
        // dd($data);
    }
}
