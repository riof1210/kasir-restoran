@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Data Pelanggan</h1>
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
                    <div class="card-header">Data Pelanggan</div>
                    <div class="card-body">
                        <div class="foem-group">
                            <label for="">Nama Pelanggan</label>
                            <input type="text" name="name" value="{{ $pelanggan->name }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('admin/pelanggan') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection