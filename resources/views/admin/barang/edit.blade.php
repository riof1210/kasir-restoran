@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Edit Data Menu</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Menu</div>
                    <div class="card-body">
                        <form action="{{ route('barangs.update', $barangs->id) }}" method="post">
                        @csrf
                    @method('put')
                <div class="form-group">
                    <label for="">Masukan Nama Menu</label>
                    <input type="text" name="nama_barang" value="{{ $barangs->nama_barang }}" class="form-control @error('nama_barang') is-invalid" @enderror>
                    @error('nama_barang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Masukan Kategori Menu</label>
                    <input type="text" name="kategori_id" value="{{ $barangs->kategori_id }}" class="form-control @error('kategori_id') is-invalid" @enderror>
                    @error('kategori_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Masukan Harga</label>
                    <input type="number" name="harga" value="{{ $barangs->harga }}" class="form-control @error('harga') is-invalid" @enderror>
                    @error('harga')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Masukan Stok Menu</label>
                    <input type="number" name="stok" value="{{ $barangs->stok }}" class="form-control @error('stok') is-invalid" @enderror>
                    @error('stok')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            <div class="form-group">
                <button type="reset" class="btn btn-outline-warning">Reset</button>
                <button type="submit" class="btn btn-outline-primary">Simpan</button>
            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection