@extends("layout.admin")

@section("content")
<div class="p-4 bg-secondary bg-opacity-10 h-100">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>Penulis</h4>
                        <a href="{{ route("admin.author.create") }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Tanggal lahir</th>
                                <th>Ditambahkan pada</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($authors as $author)
                            <tr class="align-middle">
                                <td class="align-middle">{{ $no++ }}</td>
                                <td class="align-middle">{{ $author->id }}</td>
                                <td class="align-middle">{{ $author->name }}</td>
                                <td class="align-middle">{{ $author->birth }}</td>
                                <td class="align-middle">{{ $author->created_at }}</td>
                                <td class="align-middle d-flex gap-2 justify-content-end">
                                    <a href="{{ route("admin.author.edit", $author->id) }}" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form method="POST" action="{{ route("admin.author.delete", $author->id) }}">
                                        @csrf
                                        @method("delete")
                                        <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                    </form>
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
@endsection