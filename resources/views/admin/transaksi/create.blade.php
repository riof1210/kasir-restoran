@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Tambah Data Transaksi</h1>
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
                    <div class="card-header">Data Transaksi</div>
                    <div class="card-body">
                        <form action="{{ route('transaksis.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Pemesan</label>
                            <select name="id_pelanggan" class="form-control @error('id_pelanggan') is-invalid @enderror" >
                                @foreach($pelanggan as $data)
                                    <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                            </select>
                            @error('id_pelanggan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nama Menu</label>
                            <select name="id_barang" class="form-control @error('id_barang') is-invalid @enderror" >
                                @foreach($barang as $data)
                                    <option value="{{$data->id}}">{{$data->nama_barang}}</option>
                                @endforeach
                            </select>
                            @error('id_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Jumlah Menu</label>
                            <input type="number" name="jumlah" class="form-control @error('jumlah')
                                is-invalid
                            @enderror">
                            @error('jumlah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Total Harga</label>
                            <input type="text" name="total_harga" class="form-control @error('total_harga')
                                is-invalid
                            @enderror">
                            @error('total_harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Uang Bayar</label>
                            <input type="text" name="uang" class="form-control @error('uang')
                                is-invalid
                            @enderror">
                            @error('uang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Total Kembalian</label>
                            <input type="text" name="kembalian" class="form-control @error('kembalian')
                                is-invalid
                            @enderror">
                            @error('kembalian')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Tanggal Beli</label>
                            <input type="date" name="tgl_beli" class="form-control @error('tgl_beli')
                                is-invalid
                            @enderror">
                            @error('tgl_beli')
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