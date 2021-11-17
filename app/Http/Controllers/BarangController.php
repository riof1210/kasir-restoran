<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::with('kategori')->get();
        return view('admin.barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.barang.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'kategori_id' => 'required',
            'nama_barang' => 'required',
            'harga' => 'rquired',
            'stok' => 'required'
        ]);

        $barang = new Barang;
        $barang->kategori_id = $request->kategori_id;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->save();
        return redirect()->route('barangs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = barang::findOrFail($id);
        return view('admin.barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = barang::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.barang.edit', compact('barang','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'kategori_id' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->name = $request->name;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->save();
        return redirect()->route('barangs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barangs.index');
    }
}
