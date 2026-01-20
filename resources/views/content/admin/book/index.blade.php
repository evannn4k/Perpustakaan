@extends("layout.admin")

@section("content")
<div class="p-4 bg-secondary bg-opacity-10 h-100">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>Buku</h4>
                        <a href="{{ route("admin.book.create") }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Sampul</th>
                                <th>Id</th>
                                <th>Judul</th>
                                <th>Tahun</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                                <th>Ditambahkan pada</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection