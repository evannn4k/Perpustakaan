@extends("layout.admin")

@section("content")

<div class="p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-end">
                <figure class="m-0">
                    <blockquote class="blockquote">
                        <p>Halaman daftar pengguna</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Untuk mengelola data pengguna
                    </figcaption>
                </figure>
                
                <a href="{{ route("admin.user.create") }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah pengguna</a>
            </div>

            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Peran</th>
                        <th>Ditambahkan Pada</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($users as $user)
                    <tr>
                        <td class="align-middle">{{ $no++ }}</td>
                        <td class="align-middle">{{ $user->id }}</td>
                        <td class="align-middle">{{ $user->name }}</td>
                        <td class="align-middle">{{ $user->email }}</td>
                        <td class="align-middle">{{ $user->role }}</td>
                        <td class="align-middle">{{ $user->created_at }}</td>
                        <td class="align-middle">
                            <a href="" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection