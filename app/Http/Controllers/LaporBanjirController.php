<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporBanjir; 

class LaporBanjirController extends Controller
{
   
    public function index() 
    {    
        $laporanBanjir = LaporBanjir::latest()->get();

        return view('laporbanjir.index', compact('laporanBanjir'));
    }

    public function form()
    {
        return view('laporbanjir.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'desa' => 'required|string|max:100',
            'tinggi_genangan' => 'required|numeric|min:0',
        ]);

        LaporBanjir::create($data);

        return redirect()->route('lapor-banjir.index')
                         ->with('success', 'Laporan banjir berhasil dikirim dan disimpan ke database!');
    }

    public function konfirmasi()
    {
        return view('laporbanjir.konfirmasi');
    }
}