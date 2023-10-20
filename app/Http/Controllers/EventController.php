<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    function index(){

        $data['list'] = Event::all();
        return view('admin.event.index', $data);
    }
    function tambah(){

        return view('admin.event.tambah');
    }
    function tambahAksi(Request $r){

        $event = new Event;
        $event->judul = $r->judul;
        $event->isi = $r->isi;
        $event->handleUploadFoto();

        $simpan = $event->save();

        if ($simpan == 1) {
            return redirect('admin/event')->with('success', 'Data berhasil ditambahkan !');
        }else{
            return back()->with('danger', 'Data gagal ditambahkan, coba ulangi kembali !');
        }
    }
    function edit(Event $event){
        $data['event'] = $event;
        return view('admin.event.edit', $data);
    }
    function editAksi(Request $r,Event $event){


        if($r->gambar != null){
            $event->judul = $r->judul;
            $event->isi = $r->isi;
            $event->handleUploadFoto();

            $simpan = $event->update();

            if ($simpan == 1) {
                return redirect('admin/event')->with('success', 'Data berhasil diupdate !');
            }else{
                return back()->with('danger', 'Data gagal diupdate, coba ulangi kembali !');
            }
        }else{
            $event->judul = $r->judul;
            $event->isi = $r->isi;

            $simpan = $event->update();

            if ($simpan == 1) {
                return redirect('admin/event')->with('success', 'Data berhasil diupdate !');
            }else{
                return back()->with('danger', 'Data gagal diupdate, coba ulangi kembali !');
            }
        }
        
    }
    function hapus(Event $event){

        $hapus = $event->handleDeleteFoto();
        if($hapus){

            $simpan = $event->delete();

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
