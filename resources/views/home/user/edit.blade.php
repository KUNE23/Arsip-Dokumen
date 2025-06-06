@extends('layouts.master')
@section('tittle','| Edit User')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data User</h3>
                            <a class="btn btn-primary" href="/user">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{ $user->id }}/update" method="post">
                                @csrf   
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama User</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id=""
                                        value="{{ $user->name }}"
                                        aria-describedby="helpId"
                                        placeholder=""
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
                                        value="{{ $user->email }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('email')
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