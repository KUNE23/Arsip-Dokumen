@extends('layouts.master')
@section('tittle', '| Dokumen')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Dokumen</h3>
                            <a class="btn btn-primary" href="/dokumen/tambah"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead>
                                        <tr>
                                            <th >ID</th>
                                            <th >Nama Nasabah</th>
                                            <th >Nama Dokumen</th>
                                            <th >Tanggal Unggah</th>
                                            <th >Jenis</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dokumen as $dokumen)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $dokumen->nama_nasabah }}</td>
                                            <td>{{ $dokumen->nama_dokumen }}</td>
                                            <td>{{ $dokumen->formatted_upload_date }}</td>
                                            <td>{{ $dokumen->Jenis->nama_jenis }}</td>
                                            <td>
                                                <a class="btn btn-warning" href="/dokumen/{{ $dokumen->id }}/detail"><i class="fas fa-file-alt"></i> Detail</a>
                                                <a class="btn btn-danger" 
                                               name="archive" type="submit" onclick="konfirmasihapus(event, '{{ $dokumen->id }}')"><i class="fa fa-trash"></i> Hapus</a>
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
                    window.location.href = '/dokumen/delete/' + id;
                });
            }
        });
    }
</script>
@endsection