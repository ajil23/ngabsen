<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
{
    public function index(){
        $datakelas = Kelas::paginate(5);
        return view('adminpanel.kelas.view_kelas', ['datakelas' => $datakelas]);
    }

    public function add(){
        return view('adminpanel.kelas.add_kelas');
    }

    public function store(Request $request){
        $datakelas = new Kelas();
        $datakelas->nama_kelas = $request->nama_kelas;
        $datakelas->jumlah_siswa = $request->jumlah_siswa;
        $datakelas->angkatan = $request->angkatan;
        $datakelas->save();
        Alert::success('Sukses', 'Sukses Menambahkan Data Kelas');
        return redirect()->route('kelas.view');
    }

    public function edit($id){
        $editkelas = Kelas::find($id);
        return view('adminpanel.kelas.edit_kelas', compact('editkelas'));
    }

    public function update( Request $request, $id){
        $editkelas = Kelas::find($id);
        $editkelas->nama_kelas = $request->nama_kelas;
        $editkelas->jumlah_siswa = $request->jumlah_siswa;
        $editkelas->angkatan = $request->angkatan;
        $editkelas->update();
        Alert::success('Sukses', 'Sukses Mengubah Data Kelas');
        return redirect()->route('kelas.view');
    }

    public function delete(string $id){
        $deletekelas = Kelas::find($id);
        $deletekelas->delete();
        Alert::success('Sukses', 'Sukses Menghapus Data Kelas');
        return redirect()->route('kelas.view');
    }
}
