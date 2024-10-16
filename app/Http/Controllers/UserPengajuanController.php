<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPengajuanController extends Controller
{
    public function index()
    {
        return view('user.userpengajuan');
    }

    public function create()
    {
        return view('user.userformpengajuan');
    }

        public function store(Request $request)
        {
            // Validasi input
            $request->validate([
                'nama' => 'required|string|max:255',
                'jabatan' => 'required|string|max:255',
                'jenis_barang' => 'required|string|max:255',
                'merk_spesifikasi' => 'required|string|max:255',
                'jumlah' => 'required|integer|min:1',
                'satuan_barang' => 'required|string|max:255',
                'keterangan' => 'nullable|string|max:500',
            ]);
    
            // Buat pengajuan baru dan simpan
            Pengajuan::create([
                'nama' => $request->input('nama'),
                'jabatan' => $request->input('jabatan'),
                'jenis_barang' => $request->input('jenis_barang'),
                'merk_spesifikasi' => $request->input('merk_spesifikasi'),
                'jumlah' => $request->input('jumlah'),
                'satuan_barang' => $request->input('satuan_barang'),
                'keterangan' => $request->input('keterangan'),
            ]);
    
            // Redirect ke halaman pengajuan dengan pesan sukses
            return redirect('/userpengajuan')->with('success', 'Pengajuan berhasil disimpan!');
        }
    }


