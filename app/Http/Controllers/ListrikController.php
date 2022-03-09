<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListrikController extends Controller
{
    // tampil data
    public function index()
    {
        // $data = Listrik::all();
        return view ('electricity.tampil_data', [ 
            'title'=>'Listrik'
        ]);
    }
}
