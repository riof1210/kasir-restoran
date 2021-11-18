@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Data Transaksi</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="containter">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Transaksi</div>
                    <div class="card-body">
                        <div class="foem-group">
                            <label for="">Nama Pelanggan</label>
                            <input type="text" name="nama" value="{{ $pelanggan->nama }}" class="form-control" readonly>
                        </div>
                        <div class="foem-group">
                            <label for="">Nama Menu</label>
                            <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control" readonly>
                        </div>
                        <div class="foem-group">
                            <label for="">Jumlah Pembelian</label>
                            <input type="number" name="Jumlah" value="{{ $transaksi->jumlah }}" class="form-control" readonly>
                        </div>
                        <div class="foem-group">
                            <label for="">Total Harga</label>
                            <input type="number" name="total_harga" value="{{ $transksi->total_harga }}" class="form-control" readonly>
                        </div>
                        <div class="foem-group">
                            <label for="">Uang Bayar</label>
                            <input type="number" name="uang" value="{{ $transaksi->uang }}" class="form-control" readonly>
                        </div>
                        <div class="foem-group">
                            <label for="">Kembalian</label>
                            <input type="number" name="kembalian" value="{{ $transaksi->kembalian }}" class="form-control" readonly>
                        </div>
                        <div class="foem-group">
                            <label for="">Tanggal Beli</label>
                            <input type="number" name="tgl_beli" value="{{ $transaksi->tgl_beli }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('admin/transaksi') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection