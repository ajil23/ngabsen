<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MapelController extends Controller
{
    public function index(){
        $datamapel = Mapel::paginate(4);
        return view('adminpanel.mapel.view_mapel', ['datamapel' => $datamapel]);
    }

    public function add(){
        return view('adminpanel.mapel.add_mapel');
    }

    public function store(Request $request){
        $datamapel = new Mapel();
        $datamapel->kode_mapel = $request->kode_mapel;
        $datamapel->nama_mapel = $request->nama_mapel;
        $datamapel->save();
        Alert::success('Sukses', 'Sukses Menambahkan Data Mata Pelajaran');
        return redirect()->route('mapel.view');
    }
    
    public function edit($id){
        $editmapel = Mapel::find($id);
        return view('adminpanel.mapel.edit_mapel', compact('editmapel'));
    }

    public function update( Request $request, $id){
        $editmapel = Mapel::find($id);
        $editmapel->kode_mapel = $request->kode_mapel;
        $editmapel->nama_mapel = $request->nama_mapel;
        $editmapel->update();
        Alert::success('Sukses', 'Sukses Mengubah Data Mata Pelajaran');
        return redirect()->route('mapel.view');
    }

    public function delete(string $id){
        $deletemapel = Mapel::find($id);
        $deletemapel->delete();
        Alert::success('Sukses', 'Sukses Menghapus Data Mata Pelajaran');
        return redirect()->route('mapel.view');
    }
}
