<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class ProfileController extends Controller
{
    function index(){

        $data['list'] = Auth::guard('admin')->user();
        return view('admin.profile.index', $data);
    }
    function edit(Request $r, Admin $admin){

        if($r->password != null){
            if($r->gambar != null){
                $admin->handleDeleteFoto();
                $admin->nama = $r->nama;
                $admin->email = $r->email;
                $admin->password = $r->password;
                $admin->handleUploadFoto();
                $update = $admin->update();
                if ($update == 1) {
                    return back()->with('success', 'Data berhasil diupdate !');
                }else{
                    return back()->with('danger', 'Data gagal diupdate, coba ulangi kembali !');
                }
            }else{
                $admin->nama = $r->nama;
                $admin->email = $r->email;
                $admin->password = $r->password;
                $update = $admin->update();
                if ($update == 1) {
                    return back()->with('success', 'Data berhasil diupdate !');
                }else{
                    return back()->with('danger', 'Data gagal diupdate, coba ulangi kembali !');
                }
            }
        }else{
            if($r->gambar != null){
                $admin->handleDeleteFoto();
                $admin->nama = $r->nama;
                $admin->email = $r->email;
                $admin->handleUploadFoto();
                $update = $admin->update();
                if ($update == 1) {
                    return back()->with('success', 'Data berhasil diupdate !');
                }else{
                    return back()->with('danger', 'Data gagal diupdate, coba ulangi kembali !');
                }
            }else{
                $admin->nama = $r->nama;
                $admin->email = $r->email;
                $update = $admin->update();
                if ($update == 1) {
                    return back()->with('success', 'Data berhasil diupdate !');
                }else{
                    return back()->with('danger', 'Data gagal diupdate, coba ulangi kembali !');
                }
            }
        }
    }
    
}
