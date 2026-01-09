<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {

        $data = Mahasiswa::all();

        return view('mahasiswa', [
            'data' => $data,
            'title' => 'Data Mahasiswa',
        ]);
    }
    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa',[
            "title" => "Tambah Data Mahasiswa",
        ]);
    }

    public function insertdata(Request $request)
    {
        $data = new Mahasiswa();
        $data->nama = $request->nama;
        $data->nim = $request->nim;
        $data->prodi = $request->prodi;
        $data->email = $request->email;
        $data->nohp = $request->nohp;
        $data->save();

        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampildata($id)
    {
        $data = Mahasiswa::find($id);

        return view('edit', [
            'title' => 'Edit Mahasiswa',
            'data' => $data,
        ]);
    }

    public function editdata(Request $request, $id)
    {
        $data = Mahasiswa::find($id);

        $data->update($request->only(['nama','nim','prodi','email','nohp']));

        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Di Edit!');
    }

    public function deletedata(Request $request, $id)
{
    $data = Mahasiswa::find($id);
    if ($data) {
        $data->delete();
        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Di Hapus!');
    } else {
        return redirect()->route('mahasiswa')->with('error', 'Data tidak ditemukan!');
    }
}

}