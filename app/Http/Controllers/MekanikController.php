<?php

namespace App\Http\Controllers;

use App\Models\Mekanik;
use Illuminate\Http\Request;

class MekanikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // tampil data
    public function index()
    {
        $data = Mekanik::all();
        // dd($data);

        return view('data_mekanik', compact('data'), [
            "title" => "Mekanik"
            
        ]);
    }

    // tambah data
    public function add_mekanik()
    {
        return view('tambah_mekanik', [
            "title" => "Input Mekanik",
        ]);
    }

    public function in_mekanik(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nama_sparepart' => 'required|max:255',
            'kode_sparepart' => 'required|max:255',
            'jumlah' => 'required|integer',
            'tempat' => 'required|max:255',
            'min_stock' => 'required|integer',
            'max_stock' => 'required|integer',

        ]);
        Mekanik::create($validatedData);
        return redirect()->route('data_mekanik')->with('success', 'Data baru berhasil ditambahkan!');
    

        Mekanik::create($request->all());
        
        return redirect()->route('data_mekanik');
    }

    // edit data
    public function edit_mekanik($id)
    {
        $data = Mekanik::find($id);
        // dd($data);
        return view('update_mekanik', compact('data'), [
            "title" => "Edit Mekanik",
        ]);
    }
    
    public function up_mekanik(Request $request, $id)
    {
        $data = Mekanik::find($id);
        $data -> update ($request->all());
        return redirect()->route('data_mekanik')->with('success', 'Data berhasil diUpdate!');
    }

    // hapus data
    
    public function del_mekanik($id)
    {
        $data = Mekanik::find($id);
        $data -> delete ();
        // dd($data);
        return redirect()->route('data_mekanik')->with('success', 'Data berhasil diHapus');
    }

    
    
} 