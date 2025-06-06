@extends('layouts.master')
@section('tittle', '| Jenis')
@section('content')

    <div class="content-wrapper">
        <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Jenis</h3>
                            <a class="btn btn-primary" href="/jenis/tambah"><i class="fas fa-plus"></i> Tambah</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="datatable">
                                        <thead>
                                            <tr class="">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Jenis</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($jenis as $jenis)
                                            <tr class="">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $jenis->nama_jenis }}</td>
                                                <td>
                                                <a class="btn btn-warning" href="/jenis/{{ $jenis->id }}/show"><i class="fas fa-edit"></i>   Edit</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection