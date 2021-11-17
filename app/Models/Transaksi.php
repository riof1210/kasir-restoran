<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id_pelanggan', 'id_barang', 'jumlah', 'total_harga','uang','kembalian','tgl_beli'];
    protected $visible = ['id_pelanggan', 'id_barang', 'jumlah', 'total_harga','uang','kembalian','tgl_beli'];
    public $timestamps = true;


    public function pelanggan(){

        return $this->belongsTo('App\Models\Pelanggan', 'id_barang');
    }
    public function barang(){

    return $this->belongsTo('App\Models\Barang', 'id_barang');
    }
}
