<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'admin';
    protected $fillable = [
        'gambar',
        'nama',
        'email',
        'password',
    ];
    function handleUploadFoto(){
        if(request()->hasFile('gambar')){
            $gambar = request()->file('gambar');
            $destination = "/profile";
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
