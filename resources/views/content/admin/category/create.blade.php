@extends("layout.admin")

@section("content")

<div class="p-4 bg-secondary bg-opacity-10 h-100">
    <div class="row">
        <div class="col-md-6 offset-md-3 py-4">
            <form action="{{ route("admin.category.store") }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="py-2">Tambah kategori baru</h4>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 py-3">
                            <div class="col-md-12">
                                <label for="name" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control @error("name") is-invalid @enderror" name="name" id="name">
                                @error("name")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12 d-flex gap-2">
                                <a href="{{ route("admin.user.index") }}" class="btn btn-danger"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection