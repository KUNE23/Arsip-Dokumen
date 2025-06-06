@extends('layouts.master')
@section('tittle', '| Dashboard')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $user }}</h3>

                <p>Data User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jenis}}</h3>

                <p>Data Jenis Dokumen</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-bar"></i>
              </div>
              <a href="/jenis" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $dokblmlengkap }}</h3>

                <p>Dokumen Belum Lengkap</p>
              </div>
              <div class="icon">
                <i class="fas fa-exclamation-triangle"></i>
              </div>
              <a href="/dokumen" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $doksdhlengkap }}</h3>

                <p>Dokumen Sudah Lengkap</p>
              </div>
              <div class="icon">
                <i class="fas fa-check-circle"></i>
              </div>
              <a href="/dokumen" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
    </section>


    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Data Dokumen Sudah Lengkap</h3>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Nama Nasabah</th>
                      <th>Nama Dokumen</th>
                      <th>Nomor Dokumen</th>
                      <th>Jenis Dokumen</th>
                      <th style="width: 40px">Status Dokumen</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($dokumen as $dokumen)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $dokumen->nama_nasabah}}</td>
                      <td>
                        {{ $dokumen->nama_dokumen }}
                      </td>
                      <td>{{ $dokumen->nomor_dokumen }}</td>
                      <td>{{ $dokumen->Jenis->nama_jenis }}</td>
                      <td style="color: green;">{{ $dokumen->verifikasi_dokumen }}</td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </section>

  </div>


  @endsection
  