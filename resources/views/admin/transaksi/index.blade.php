@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Transaksi</h1>
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
                    <div class="card-header">
                        Data Transaksi
                        <a href="{{ route('transaksis.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah Transaksi</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Nama Pesanan</th>
                                    <th>Total Harga</th>
                                    <th>Uang Bayar</th>
                                    <th>Kembalian</th>
                                    <th>Tanggal Beli</th>
                                    <th>Aksi</th>
                                </tr>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($transaksis as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->barang->nama_barang}}</td>
                                        <td>{{ $data->total_harga }}</td>
                                        <td>{{ $data->uang }}</td>
                                        <td>{{ $data->kembalian }}</td>
                                        <td>{{ $data->tgl_beli }}</td>
                                        <td><form action="{{ route('transaksis.destroy', $data->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('transaksis.edit', $data->id) }}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{ route('transaksis.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?')">Delete</button>
                                        </form></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection