@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Data Menu</h1>
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
                    <div class="card-header">Data Menu</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Menu</label>
                            <input type="text" name="nama_barang" value="{{ $barangs->nama_barang }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Kategori Menu</label>
                            <input type="text" name="ketegori_barang" value="{{ $barangs->kategori_barang }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Harga Menu</label>
                            <input type="number" name="harga" value="{{ $barangs->harga }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="number" name="stok" value="{{ $barangs->stok }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('admin/barangs') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection