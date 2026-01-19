@extends("layout.base")

@push("styles")
<link rel="stylesheet" href="{{ asset("assets/css/admin.css") }}">
@endpush

@section("main")

<div class="d-flex vh-100">

    <aside class="overflow-auto flex-shrink-0 border-end" style="width:310px">
        <div class="d-flex flex-column">
            <div class="p-4 border-bottom">
                <h3>Halaman Admin</h3>
                <p>{{ Auth::guard("admin")->user()->name }}</p>
            </div>
            <div class="p-4 d-flex flex-column gap-2">
                <div class="d-flex flex-column gap-2">
                    <a href="{{ route("admin.dashboard.index") }}" class="w-100 btn {{ (Route::is("admin.dashboard.index")) ? "btn-primary" : "btn-light" }} d-flex">
                        <div style="width: 30px;" class="text-start"><i class="fa-solid fa-house"></i></div>Dashboard
                    </a>
                    <a href="{{ route("admin.user.index") }}" class="w-100 btn {{ (Route::is("admin.user.index")) ? "btn-primary" : "btn-light" }} d-flex">
                        <div style="width: 30px;" class="text-start"><i class="fa-solid fa-users"></i></div>Pengguna
                    </a>
                </div>
                <div class="d-flex flex-column gap-2">
                    <hr class="text-secondary">
                    <div class="mx-2">
                        <h5>Produk</h>
                    </div>
                    <a href="{{ route("admin.book.index") }}" class="w-100 btn {{ (Route::is("admin.book.index")) ? "btn-primary" : "btn-light" }} d-flex">
                        <div style="width: 30px;" class="text-start"><i class="fa-solid fa-book"></i></div>Buku
                    </a>
                    <a href="{{ route("admin.author.index") }}" class="w-100 btn {{ (Route::is("admin.author.index")) ? "btn-primary" : "btn-light" }} d-flex">
                        <div style="width: 30px;" class="text-start"><i class="fa-solid fa-pen"></i></div>Penulis
                    </a>
                    <a href="{{ route("admin.category.index") }}" class="w-100 btn {{ (Route::is("admin.category.index")) ? "btn-primary" : "btn-light" }} d-flex">
                        <div style="width: 30px;" class="text-start"><i class="fa-solid fa-list"></i></div>Kategori
                    </a>
                </div>
                <div class="d-flex flex-column gap-2">
                    <hr class="text-secondary">
                    <div class="mx-2">
                        <h5>Loan</h>
                    </div>
                    <a href="{{ route("admin.loan.index") }}" class="w-100 btn {{ (Route::is("admin.loan.index")) ? "btn-primary" : "btn-light" }} d-flex">
                        <div style="width: 30px;" class="text-start"><i class="fa-solid fa-square-plus"></i></div>Tambah Pinjaman
                    </a>
                    <a href="{{ route("admin.history.index") }}" class="w-100 btn {{ (Route::is("admin.history.index")) ? "btn-primary" : "btn-light" }} d-flex">
                        <div style="width: 30px;" class="text-start"><i class="fa-solid fa-clock-rotate-left"></i></div>Riwayat Pinjaman
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <div class="flex-fill d-flex flex-column">
        <nav class="px-3 py-2 border-bottom d-flex justify-content-between">
            <h5 class="fw-normal">Admin Dashboard</h5>
            <div class="">
                <a href="{{ route("logout") }}" class="btn btn-sm btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
            </div>
        </nav>
    
        <div class="overflow-auto flex-fill">
            @yield("content")
        </div>
    </div>

</div>

@endsection