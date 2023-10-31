<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "Mahasiswa";
    protected $fillable = ['nama','jenkel','alamat','hp','jurusan','email','foto','no_ktp'];

    public function wali(){
        return $this->hasOne('App\Models\Wali');
    }

    public function dosen(){
        return $this->belongsTo('App\Models\Dosen');
    }

    public function matkul(){
        return $this->belongsToMany('App\Models\Matkul')->withPivot(['nilai']);
    }
}
