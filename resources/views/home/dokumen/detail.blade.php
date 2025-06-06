@extends('layouts.master')
@section('tittle', '| Detail Dokumen')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="fw-bold m-0">
                                <i class="fas fa-file-alt"></i> Detail Dokumen: {{ $dokumen->nama_dokumen }}
                            </h3>
                            <a class="btn btn-sm btn-primary" href="/dokumen">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-muted">
                                    <p class="text-sm mb-2">Nama Nasabah
                                        <br><strong>{{ $dokumen->nama_nasabah }}</strong>
                                    </p>
                                    <p class="text-sm mb-2">Nama Dokumen
                                        <br><strong>{{ $dokumen->nama_dokumen }}</strong>
                                    </p>
                                    <p class="text-sm mb-2">Nomor Dokumen
                                        <br><strong>{{ $dokumen->nomor_dokumen }}</strong>
                                    </p>
                                    <p class="text-sm mb-2">Deskripsi
                                        <br><strong>{{ $dokumen->deskripsi }}</strong>
                                    </p>
                                </div>

                                <div class="col-md-6 text-muted">
                                    <p class="text-sm mb-2">Jenis Dokumen
                                        <br><strong>{{ $dokumen->Jenis->nama_jenis }}</strong>
                                    </p>
                                    <p class="text-sm mb-2">Tanggal Unggah
                                        <br><strong>{{ $dokumen->formatted_upload_date }}</strong>
                                    </p>
                                    <p class="text-sm mb-2">Diunggah Oleh
                                        <br><strong>{{ $dokumen->User->name }}</strong>
                                    </p>
                                    <p class="text-sm mb-2">Status Dokumen
                                        @if($dokumen->verifikasi_dokumen == 'Belum Lengkap')
                                        <br><strong style="color: red;">{{ $dokumen->verifikasi_dokumen }}</strong>
                                        @elseif($dokumen->verifikasi_dokumen == 'Sudah Lengkap')
                                        <br><strong style="color: green;">{{ $dokumen->verifikasi_dokumen }}</strong>
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <hr>

                            <h5 class="text-muted"><i class="fas fa-paperclip"></i> File Dokumen</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="far fa-fw fa-file-word text-primary"></i>
                                    <a href="{{ asset('storage/' . $dokumen->file_path) }}" class="text-secondary" target="_blank">
                                        {{ basename($dokumen->file_path) }}
                                    </a>
                                </li>
                            </ul>
            
                            <div class="text-center mt-4">
                                <a class="btn btn-warning" href="/dokumen/{{ $dokumen->id }}/show">
                                    <i class="fas fa-edit"></i> Edit Dokumen
                                </a>
                                <a class="btn btn-success" href="/dokumen/{{ $dokumen->id }}/download">
                                    <i class="fas fa-download"></i> Unduh Dokumen
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection
