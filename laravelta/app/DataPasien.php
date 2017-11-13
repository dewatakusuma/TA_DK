<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPasien extends Model
{
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'datapasien';

    protected $fillable = [
        'id_pasien', 'gambar', 'nama_pasien','email','device_id','alamat','jenis_kelamin','phone','usia','id_dokter',
         
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
