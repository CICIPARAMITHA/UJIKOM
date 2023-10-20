<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    function index(){

        $data['list'] = Paket::all();
        return view('admin.paket.index', $data);
    }
    function tambah(){

        return view('admin.paket.tambah');
    }
    function tambahAksi(Request $r){

        $paket = new Paket;
        $paket->nama = $r->nama;
        $paket->harga = $r->harga;
        $paket->handleUploadFoto();

        $simpan = $paket->save();

        if ($simpan == 1) {
            return redirect('admin/paket')->with('success', 'Data berhasil ditambahkan !');
        }else{
            return back()->with('danger', 'Data gagal ditambahkan, coba ulangi kembali !');
        }
    }
    function edit(Paket $paket){
        $data['paket'] = $paket;
        return view('admin.paket.edit', $data);
    }
    function editAksi(Request $r,Paket $paket){


        if($r->gambar != null){
            $paket->nama = $r->nama;
            $paket->harga = $r->harga;
            $paket->handleUploadFoto();

            $simpan = $paket->update();

            if ($simpan == 1) {
                return redirect('admin/paket')->with('success', 'Data berhasil diupdate !');
            }else{
                return back()->with('danger', 'Data gagal diupdate, coba ulangi kembali !');
            }
        }else{
            $paket->nama = $r->nama;
            $paket->harga = $r->harga;

            $simpan = $paket->update();

            if ($simpan == 1) {
                return redirect('admin/paket')->with('success', 'Data berhasil diupdate !');
            }else{
                return back()->with('danger', 'Data gagal diupdate, coba ulangi kembali !');
            }
        }
        
    }
    function hapus(Paket $paket){

        $hapus = $paket->handleDeleteFoto();
        if($hapus){

            $simpan = $paket->delete();

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
