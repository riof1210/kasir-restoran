<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    protected $visible = ['nama'];


    public $timestamps = true;


    public function pesan(){

        return $this->hasMany('App\Models\Pesan', 'id_pelanggan');
    }
    public function transaksi(){

    return $this->hasMany('App\Models\Transaksi', 'id_pelanggan');
    }
}
