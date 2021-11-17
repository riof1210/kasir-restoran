<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::with('pelanggan','barang')->get();
        return view('admin.transaksi.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $barang = Barang::all();
        return view('admin.transaksi.create', compact('pelanggan', 'barang'));
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
            'id_pelanggan' => 'required',
            'id_barang' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'uang_bayar' => 'required',
            'kembalian' => 'required',
            'tgl_transaksi' => 'required',
        ]);

        $transaksi = new Transaksi;
        $transaksi->id_pelanggan = $request->id_pelanggan;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->uang_bayar = $request->uang_bayar;
        $transaksi->kembalian = $request->kembalian;
        $transaksi->tgl_bayar = $request->tgl_transaksi;
        $transaksi->save();
        return redirect()->route('transaksis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $barang = Barang::all();
        return view('admin.transaksi.edit', compact('transaksi', 'pelanggan', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'id_pelanggan' => 'required',
            'id_barang' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'uang_bayar' => 'required',
            'kembalian' => 'required',
            'tgl_transaksi' => 'required',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->id_pelanggan = $request->id_pelanggan;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->uang_bayar = $request->uang_bayar;
        $transaksi->kembalian = $request->kembalian;
        $transaksi->tgl_bayar = $request->tgl_transaksi;
        $transaksi->save();
        return redirect()->route('transaksis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksis.index');
    }
}
