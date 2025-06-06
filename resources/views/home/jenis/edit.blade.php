@extends('layouts.master')
@section('tittle', '| Edit Jenis')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary" href="/jenis">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/jenis/{{ $jenis->id }}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Jenis</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_jenis"
                                        id=""
                                        value="{{ $jenis->nama_jenis }}"
                                        aria-describedby="helpId"
                                        placeholder="Contoh : Keuangan, Proyek"
                                    />
                                    @error('nama_jenis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                 </div>
                                 @enderror
                                </div>
                                <button class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection