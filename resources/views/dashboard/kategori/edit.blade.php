@extends('layouts.dashboard.index')
@section('title', 'Tambah Buku')
@section('content')


    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Edit Kategori</h5>
            <form action="{{ route('dashboard.kategori.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nama Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="name" value="{{ $kategori->name }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right">Tambah</button>
            </form>
        </div>
    </div>
@endsection