<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index() {
        $data_mahasiswa = Mahasiswa::all();
        return view('mahasiswa.mahasiswa', ['data_mahasiswa' => $data_mahasiswa]);
    }

    public function create(Request $request) {
        Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('berhasil', 'Data berhasil ditambahkan');
    }

    public function edit($id) {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, $id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('berhasil', 'Data berhasil di ubah');
    }

    public function delete($id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('berhasil', 'Data berhasil dihapus');
    }
}
