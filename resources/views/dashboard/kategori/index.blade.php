@extends('layouts.dashboard.index')
@section('title', 'Kategori Buku')
@section('content')
<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-center">Kategori Buku
            <a href="{{ route('dashboard.kategori.create') }}" class="btn btn-primary float-right">Tambah Data</a>
        </h6>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($kategoris as $kategori)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{ $kategori->name }}</td>
                        <td>
                            <a href="{{ route('dashboard.kategori.edit',$kategori->slug) }}" class="btn btn-primary"><i
                                    class="fa fa-eye"></i> Edit</a>
                            <a href="#" data-id="{{ $kategori->slug }}" class="btn btn-danger delete" title="Hapus">
                                <form action="{{ route('dashboard.kategori.destroy', $kategori->slug) }}"
                                    id="delete-{{ $kategori->slug }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                </form>
                                <i class="fa fa-trash">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('layouts.dashboard.script')
@endsection
