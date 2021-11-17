<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesans = Pesan::with('pelanggan', 'transaksi', 'barang')->get();
        return view('admin.pesan.index', compact('pesans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $transaksi = Transaksi::all();
        $barang = Barang::all();
        return view('admin.pesan.create', compact('pelanggan', 'transaksi', 'barang'));
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
            'id_transaksi' => 'required',
            'id_barang' => 'required',
        ]);

        $pesan = new Pesan;
        $pesan->id_pelanggan = $request->id_pelanggan;
        $pesan->id_transaksi = $request->id_transaksi;
        $pesan->id_barang = $request->id_barang;
        $pesan->save();
        return redirect()->route('pesans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pesan = Pesan::findOrFail($id);
        return view('admin.pesan.show', compact('pesan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pesan = Pesan::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $transaksi = Transaksi::all();
        $barang = Barang::all();
        return view('admin.pesan.edit', compact('pesan','pelanggan', 'transaksi', 'barang'));
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
            'id_transaksi' => 'required',
            'id_barang' => 'required',
        ]);

        $pesan = Pesan::findOrFail($id);
        $pesan->id_pelanggan = $request->id_pelanggan;
        $pesan->id_transaksi = $request->id_transaksi;
        $pesan->id_barang = $request->id_barang;
        $pesan->save();
        return redirect()->route('pesans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesan = Pesan::findOrFail($id);
        $pesan->delete();
        return redirect()->route('pesans.index');
    }
}
