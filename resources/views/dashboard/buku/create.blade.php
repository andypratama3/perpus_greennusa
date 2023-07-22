@extends('layouts.dashboard.index')
@section('title', 'Tambah Kategori')
@section('content')


    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Tambah Kategori</h5>
            <form action="{{ route('dashboard.kategori.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nama Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="name">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right">Tambah</button>
            </form>
        </div>
    </div>
@endsection
