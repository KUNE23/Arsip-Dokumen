@extends('layouts.master')
@section('tittle','| Tambah User')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h3>Halaman Tambah Data User</h3>
                    <a class="btn btn-primary" href="/user"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">
                        <form action="/user/simpan" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nama User</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    id=""
                                    value="{{ old('name') }}"
                                    aria-describedby="helpId"
                                    placeholder="Contoh : Arip"
                                />
                             @error('name')
                             <div class="alert alert-danger mt-2">
                                {{ $message }}
                             </div>
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    id=""
                                    value="{{ old('email') }}"
                                    aria-describedby="helpId"
                                    placeholder="Contoh : tes@gmail.com"
                                />
                              @error('email')
                              <div class="alert alert-danger mt-2">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    id=""
                                    value="{{ old('password') }}"
                                    aria-describedby="helpId"
                                    placeholder="Contoh : 24Mc6uZNVJXuXV1wkxE533"
                                />
                              @error('password')
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