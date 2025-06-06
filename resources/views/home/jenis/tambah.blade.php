@extends('layouts.master')
@section('tittle', '| Tambah Jenis')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary" href="/jenis"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/jenis/simpan" method="post">
                                @csrf
                                 <div class="mb-3">
                                    <label for="" class="form-label">Jenis Dokumen</label>
                                    <select
                                        class="form-control select2"
                                        name="nama_jenis"
                                        id=""
                                    >
                                        <option selected>Select one</option>
                                        <option value="Dokumen Identitas">Dokumen Identitas</option>
                                        <option value="Keuangan">Keuangan</option>
                                    </select>
                                    @error('nama_jenis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                 </div>
                                 @enderror
</div>
                                <button class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection