<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MahasiswaController extends Controller
{
    function dashboard()  {
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa', compact('mahasiswa'));
    }

    function add_student() {
        return view('tambah_mahasiswa');
    }

    function save_student(Request $request) {
        $mahasiswa = new Mahasiswa();

        $mahasiswa->id = Str::uuid();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->hobi = $request->hobi;
        $mahasiswa->save();

        return redirect()->route('mahasiswa');
    }

    function edit_student($id) {
        $mahasiswa = Mahasiswa::find($id);

        return view('ubah_mahasiswa', compact('mahasiswa'));
    }

    function update_student(Request $request, $id) {
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->hobi = $request->hobi;
        $mahasiswa->update();

        return redirect()->route('mahasiswa');
    }

    function delete_student($id) {
        $mahasiswa = Mahasiswa::find($id);
        
        $mahasiswa->delete();
        
        return redirect()->route('mahasiswa');
    }
}
