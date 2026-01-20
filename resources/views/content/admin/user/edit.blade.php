@extends("layout.admin")

@section("content")

<div class="p-4 bg-secondary bg-opacity-10 h-100">
    <div class="row">
        <div class="col-md-6 offset-md-3 py-4">
            <form action="{{ route("admin.user.update") }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="card">
                    <div class="card-header">
                        <h4 class="py-2">Mengedit data pengguna</h4>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 py-3">
                            <div class="col-md-12">
                                <label for="name" class="form-label">Username</label>
                                <input type="text" class="form-control @error(" name") is-invalid @enderror" name="name" id="name" value="{{ $user->name }}">
                                @error("name")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error(" email") is-invalid @enderror" name="email" id="email" value="{{ $user->email }}">
                                @error("email")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-9">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error(" password") is-invalid @enderror" name="password" id="password">
                                @error("password")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="role" class="form-label">Role</label>
                                <select name="role" id="role" class="form-select @error(" role") is-invalid @enderror">
                                    <option selected disabled>Pilih Role</option>
                                    <option value="admin" {{ ($user->role == "admin") ? "selected" : "" }}>Admin</option>
                                    <option value="user" {{ ($user->role == "user") ? "selected" : "" }}>User</option>
                                </select>
                                @error("role")
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