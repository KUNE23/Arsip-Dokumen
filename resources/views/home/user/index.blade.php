@extends('layouts.master')
@section('tittle', '| User')
@section('content')


<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data User</h3>
                            <a class="btn btn-primary" href="/user/tambah"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="tale-responsive">
                                <table class="table table-bordered data" id="datatable">
                                    <thead>
                                        <tr class="">
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama User</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $user)
                                        <tr class="">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>
                                                <a class="btn btn-warning" href="/user/{{ $user->id }}/show"><i class="fas fa-edit"></i> Edit</a>
                                                <a class="btn btn-danger" href="/user/delete/{{ $user->id }}"
                                               name="archive" type="submit" onclick="konfirmasihapus(event, '{{ $user->id }}')"><i class="fas fa-trash"></i> Hapus</a>
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

<script>
    function konfirmasihapus(event, id) {
        event.preventDefault(); // Prevent the default link click behavior
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                }).then(() => {
                    // Navigate to the delete URL after the confirmation
                    window.location.href = '/user/delete/' + id;
                });
            }
        });
    }
</script>
@endsection