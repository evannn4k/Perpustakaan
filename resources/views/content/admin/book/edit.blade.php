@extends("layout.admin")

@section("content")

<div class="p-4 bg-secondary bg-opacity-10 h-100">
    <div class="row">
        <div class="col-md-6 offset-md-3 py-4">
            <form action="{{ route("admin.author.update") }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $author->id }}">
                <div class="card">
                    <div class="card-header">
                        <h4 class="py-2">Edit data penulis</h4>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 py-3">
                            <div class="col-md-12">
                                <label for="name" class="form-label">Nama penulis</label>
                                <input type="text" class="form-control @error(" name") is-invalid @enderror" name="name" id="name" value="{{ $author->name }}">
                                @error("name")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="birth" class="form-label">Tanggal lahir</label>
                                <input type="date" class="form-control @error(" birth") is-invalid @enderror" name="birth" id="birth" value="{{ $author->birth }}">
                                @error("birth")
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