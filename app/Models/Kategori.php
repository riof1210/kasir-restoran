<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // memberikan akses field apa saja yang boleh di isi
    protected $fillable = ['kategori_barang'];
    // memberikan akses field apa saja yang boleh dilihat
    // atau di keluarkan
    protected $visible = ['kategori_barang'];

    // mencatat waktu pembuatan & update data secara otomatis
    public $timestamps = true;

    // membuat relasi one to many dengan model "Book"
    public function barang(){
        // model 'Author' bisa memiliki banyak data dari
        // model 'Book' melalui fk 'author_id'
        return $this->hasOne('App\Models\Barang', 'kategori_id');
    }
}
