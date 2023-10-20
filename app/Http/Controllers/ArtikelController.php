<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    function index(){

        $data['list'] = Artikel::all();
        return view('admin.artikel.index', $data);
    }
    function tambah(){

        return view('admin.artikel.tambah');
    }
    function tambahAksi(Request $r){

        $artikel = new Artikel;
        $artikel->judul = $r->judul;
        $artikel->isi = $r->isi;
        $artikel->handleUploadFoto();

        $simpan = $artikel->save();

        if ($simpan == 1) {
            return redirect('admin/artikel')->with('success', 'Data berhasil ditambahkan !');
        }else{
            return back()->with('danger', 'Data gagal ditambahkan, coba ulangi kembali !');
        }
    }
    function edit(Artikel $artikel){
        $data['artikel'] = $artikel;
        return view('admin.artikel.edit', $data);
    }
    function editAksi(Request $r,Artikel $artikel){


        if($r->gambar != null){
            $artikel->judul = $r->judul;
            $artikel->isi = $r->isi;
            $artikel->handleUploadFoto();

            $simpan = $artikel->update();

            if ($simpan == 1) {
                return redirect('admin/artikel')->with('success', 'Data berhasil diupdate !');
            }else{
                return back()->with('danger', 'Data gagal diupdate, coba ulangi kembali !');
            }
        }else{
            $artikel->judul = $r->judul;
            $artikel->isi = $r->isi;

            $simpan = $artikel->update();

            if ($simpan == 1) {
                return redirect('admin/artikel')->with('success', 'Data berhasil diupdate !');
            }else{
                return back()->with('danger', 'Data gagal diupdate, coba ulangi kembali !');
            }
        }
        
    }
    function hapus(Artikel $artikel){

        $hapus = $artikel->handleDeleteFoto();
        if($hapus){

            $simpan = $artikel->delete();

            if ($simpan == 1) {
                return back()->with('success', 'Data berhasil dihapus !');
            }else{
                return back()->with('danger', 'Data gagal dihapus, coba ulangi kembali !');
            }
        }else{
            return back()->with('danger', 'Data gagal dihapus, coba ulangi kembali !');
        }
        
    }
}
