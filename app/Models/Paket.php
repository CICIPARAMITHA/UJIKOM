<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Paket extends Model
{
    use HasFactory;
    protected $table = "paket";

    function handleUploadFoto(){
        if(request()->hasFile('gambar')){
            $gambar = request()->file('gambar');
            $destination = "/paket";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$gambar->extension();
            $url = $gambar->storeAs($destination, $filename);
            $this->gambar = 'app/'.$url;
            $this->save;
        }
    }
    
    function handleDeleteFoto(){
        $gambar = $this->gambar;
        if($gambar){
            $path = public_path($gambar);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
