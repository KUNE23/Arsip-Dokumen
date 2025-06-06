@extends('layouts.master')
@section('tittle', '| Edit Dokumen')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary" href="/dokumen/{{ $dokumen->id }}/detail">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/dokumen/{{ $dokumen->id }}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Nasabah</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_nasabah"
                                        id=""
                                        value="{{ $dokumen->nama_nasabah }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('nama_nasabah')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                 </div>
                                 @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Dokumen</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_dokumen"
                                        id=""
                                        value="{{ $dokumen->nama_dokumen }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('nama_dokumen')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                 </div>
                                 @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor Dokumen</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="nomor_dokumen"
                                        id=""
                                        value="{{ $dokumen->nomor_dokumen }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('nomor_dokumen')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                 </div>
                                 @enderror
                                </div>
                               <div class="mb-3">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="" rows="3">{{ $dokumen->deskripsi }}</textarea>
                                    @error('deskripsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                 </div>
                                 @enderror
                                </div>
                              <div class="mb-3">
                                <label for="" class="form-label">Nama User</label>
                                <select
                                    class="form-control select2"
                                    name="id_user"
                                    id=""
                                >
                                    <option value="" disable selected>Select one</option>
                                    @foreach($user as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                              @error('id_user')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                 </div>
                                 @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Jenis</label>
                                    <select
                                    class="form-control select2"
                                    name="id_jenis"
                                    id=""
                                    >
                                    <option value="" disable selected>Select one</option>
                                    @foreach($jenis as $jenis)
                                    <option value="{{ $jenis->id }}">{{ $jenis->nama_jenis }}</option>
                                    @endforeach
                                </select>
                              @error('id_jenis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Upload File</label>
                                    <input
                                    type="file"
                                        class="form-control"
                                        name="file_path"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                        />
                                        @error('file_path')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        @if($dokumen->verifikasi_dokumen == 'Belum Lengkap')
                                    </div>
                                    <label class="form-check-label" for="switchCheckDisabled"><b>Apakah Dokumen Sudah Lengkap ?</b></label>
                                <div class="form-check form-switch">
                                    <br>
                                    <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault" name="verifikasi_dokumen" value="Sudah Lengkap">
                                    @endif
                                </div>
                                <br>
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