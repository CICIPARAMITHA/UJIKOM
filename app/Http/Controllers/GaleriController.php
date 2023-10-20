<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    function index(){

        $data['list'] = Galeri::all();
        return view('admin.galeri.index', $data);
    }
    function tambah(){

        return view('admin.galeri.tambah');
    }
    function tambahAksi(Request $r){

        $galeri = new Galeri;
        $galeri->judul = $r->judul;
        $galeri->keterangan = $r->keterangan;
        $galeri->handleUploadFoto();

        $simpan = $galeri->save();

        if ($simpan == 1) {
            return redirect('admin/galeri')->with('success', 'Data berhasil ditambahkan !');
        }else{
            return back()->with('danger', 'Data gagal ditambahkan, coba ulangi kembali !');
        }
    }
    function edit(galeri $galeri){
        $data['galeri'] = $galeri;
        return view('admin.galeri.edit', $data);
    }
    function editAksi(Request $r,Galeri $galeri){


        if($r->gambar != null){
            $galeri->judul = $r->judul;
            $galeri->keterangan = $r->keterangan;
            $galeri->handleUploadFoto();

            $simpan = $galeri->update();

            if ($simpan == 1) {
                return redirect('admin/galeri')->with('success', 'Data berhasil diupdate !');
            }else{
                return back()->with('danger', 'Data gagal diupdate, coba ulangi kembali !');
            }
        }else{
            $galeri->judul = $r->judul;
            $galeri->keterangan = $r->keterangan;

            $simpan = $galeri->update();

            if ($simpan == 1) {
                return redirect('admin/galeri')->with('success', 'Data berhasil diupdate !');
            }else{
                return back()->with('danger', 'Data gagal diupdate, coba ulangi kembali !');
            }
        }
        
    }
    function hapus(Galeri $galeri){

        $hapus = $galeri->handleDeleteFoto();
        if($hapus){

            $simpan = $galeri->delete();

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
