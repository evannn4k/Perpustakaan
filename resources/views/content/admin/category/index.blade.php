@extends("layout.admin")

@section("content")
<div class="p-4 bg-secondary bg-opacity-10 h-100">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>Kategori</h4>
                        <a href="{{ route("admin.category.create") }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th>Kategori</th>
                                <th>Ditambahkan pada</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($categories as $category)
                            <tr class="align-middle">
                                <td class="align-middle">{{ $no++ }}</td>
                                <td class="align-middle">{{ $category->id }}</td>
                                <td class="align-middle">{{ $category->name }}</td>
                                <td class="align-middle">{{ $category->created_at }}</td>
                                <td class="align-middle d-flex gap-2 justify-content-end">
                                    <a href="{{ route("admin.category.edit", $category->id) }}" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form method="POST" action="{{ route("admin.category.delete", $category->id) }}">
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