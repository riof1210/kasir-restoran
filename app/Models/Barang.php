<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['kategori_id','nama_barang','harga','stok'];

    protected $visible = ['kategori_id','nama_barang','harga','stok'];


    public $timestamps = true;

    public function pesan(){

        return $this->hasMany('App\Models\Pesan', 'id_barang');
    }
    public function transaksi(){
        return $this->hasMany('App\Models\Transaksi', 'id_barang')
    }
    public function kategori(){
        return $this->belongsTo('App\Models\Kategori', 'kategori_id')
    }
}
