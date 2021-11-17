<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $fillable = ['id_pelanggan', 'id_order', 'id_barang', 'jumlah'];
    protected $visible = ['id_pelanggan', 'id_order', 'id_barang', 'jumlah'];
    public $timestamps = true;


    public function pesanan(){

        return $this->belongsTo('App\Models\Pelanggan', 'id_pelanggan');
    }
    public function transaksi(){

    return $this->belongsTo('App\Models\Transaksi', 'id_transaksi');
    }

    public function barang(){
    
    return $this->belongsTo('App\Models\Barang', 'id_barang');
    }

}
