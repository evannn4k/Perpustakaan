@extends("layout.admin")

@section("content")

<div class="p-4 bg-secondary bg-opacity-10 h-100">
    <div class="row">
        <div class="col-md-8 offset-md-2 py-4">
            <form action="{{ route("admin.book.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="py-2">Tambah penulis baru</h4>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 py-3">
                            <div class="col-md-12">
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" class="form-control @error("title") is-invalid @enderror" name="title" id="title">
                                @error("title")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="year" class="form-label">Tahun terbit</label>
                                <input type="date" class="form-control @error("year") is-invalid @enderror" name="year" id="year">
                                @error("year")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="author_id" class="form-label">Penulis</label>
                                <select name="author_id" id="author_id" class="form-select @error("author_id") is-invalid @enderror">
                                    <option selected disabled>Pilih penulis</option>
                                    @foreach ($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>
                                @error("author_id")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="category_id" class="form-label">Kategori</label>
                                <select name="category_id" id="category_id" class="form-select @error("category_id") is-invalid @enderror">
                                    <option selected disabled>Pilih penulis</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error("category_id")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea name="description" id="description" class="form-control @error("description") is-invalid @enderror" rows="4" style="resize: none"></textarea>
                                @error("description")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="cover" class="form-label">Sampul buku</label>
                                <input type="file" name="cover" id="cover" class="form-control @error("cover") is-invalid @enderror">
                                @error("cover")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12 d-flex gap-2">
                                <a href="{{ route("admin.author.index") }}" class="btn btn-danger"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
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