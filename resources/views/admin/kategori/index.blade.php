@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Kategori</h1>
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
                        Data Kategori
                        <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah Kategori</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kategori Menu</th>
                                    <th>Aksi</th>
                                </tr>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($kategori as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->kategori_barang }}</td>
                                        <td><form action="{{ route('kategori.destroy', $data->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-outline-info">Edit</a>
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