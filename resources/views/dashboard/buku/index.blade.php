@extends('layouts.dashboard.index')
@section('title', 'Buku')
@section('content')
<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-center">Buku
            <a href="{{ route('dashboard.buku.create') }}" class="btn btn-primary float-right">Tambah Data</a>
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
                    @foreach ($bukus as $buku)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{ $buku->name }}</td>
                        <td>
                            <a href="{{ route('dashboard.buku.edit',$buku->slug) }}" class="btn btn-primary"><i
                                    class="fa fa-eye"></i> Edit</a>
                            <a href="#" data-id="{{ $buku->slug }}" class="btn btn-danger delete" title="Hapus">
                                <form action="{{ route('dashboard.buku.destroy', $buku->slug) }}"
                                    id="delete-{{ $buku->slug }}" method="POST" enctype="multipart/form-data">
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
