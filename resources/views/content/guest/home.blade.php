@extends("layout.guest")

@section("content")

<div class="bg-secondary bg-opacity-10 min-h-100">

    <section id="hero">

        <div class="container py-5">
            <div class="text-center d-flex flex-column align-items-center gap-4">
                <div class="">
                    <label class="bg-light fw-medium border px-3 py-1 rounded-pill">Perpusakaan Online</label>
                </div>
                <label class="px-5 fw-normal" style="font-size: 3rem;">Selamat Datang di MyLibrary</label>
                <p class="w-75">Perpustakaan online ini menyediakan layanan peminjaman buku secara digital dan fisik dengan proses mudah dan cepat, membantu pengguna mengakses koleksi bacaan kapan saja dan di mana saja</p>
                <form action="" method="get" class="w-100 d-flex justify-content-center">
                    <div class="position-relative w-50 d-flex align-items-center shadow rounded">
                        <button class="position-absolute start-0 btn btn-white"><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input type="text" class="form-control ps-5 pe-3 py-2" placeholder="Search...">
                    </div>
                </form>
                <div class="d-flex flex-wrap justify-content-center gap-3 w-50">
                    <a href="" class="bg-white text-decoration-none py-1 px-3 border text-dark fw-medium rounded-pill">Fiksi</a>
                    <a href="" class="bg-white text-decoration-none py-1 px-3 border text-dark fw-medium rounded-pill">Nonfiksi</a>
                    <a href="" class="bg-white text-decoration-none py-1 px-3 border text-dark fw-medium rounded-pill">Pendidikan</a>
                    <a href="" class="bg-white text-decoration-none py-1 px-3 border text-dark fw-medium rounded-pill">Teknologi</a>
                    <a href="" class="bg-white text-decoration-none py-1 px-3 border text-dark fw-medium rounded-pill">Religi</a>
                    <a href="" class="bg-white text-decoration-none py-1 px-3 border text-dark fw-medium rounded-pill">Sejarah</a>
                    <a href="" class="bg-white text-decoration-none py-1 px-3 border text-dark fw-medium rounded-pill">Novel</a>
                    <a href="" class="bg-white text-decoration-none py-1 px-3 border text-dark fw-medium rounded-pill">Anak-anak</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="bg-white d-flex flex-column gap-4 p-4 rounded-4">

            <section id="bookList" class="recommendation">
                <div class="d-flex flex-column gap-2">
                    <h3>Rekomendasi</h3>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="border shadow-sm rounded-3 overflow-hidden d-flex justify-content-center align-items-center hover-scale-102">
                                <img src="{{ asset("assets/images/examplebook.jpg") }}" alt="" style="height:290px">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="border shadow-sm rounded-3 overflow-hidden d-flex justify-content-center align-items-center hover-scale-102">
                                <img src="{{ asset("assets/images/examplebook2.jpg") }}" alt="" style="height:290px">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="border shadow-sm rounded-3 overflow-hidden d-flex justify-content-center align-items-center hover-scale-102">
                                <img src="{{ asset("assets/images/examplebook.jpg") }}" alt="" style="height:290px">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="border shadow-sm rounded-3 overflow-hidden d-flex justify-content-center align-items-center hover-scale-102">
                                <img src="{{ asset("assets/images/examplebook2.jpg") }}" alt="" style="height:290px">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="border shadow-sm rounded-3 overflow-hidden d-flex justify-content-center align-items-center hover-scale-102">
                                <img src="{{ asset("assets/images/examplebook2.jpg") }}" alt="" style="height:290px">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="border shadow-sm rounded-3 overflow-hidden d-flex justify-content-center align-items-center hover-scale-102">
                                <img src="{{ asset("assets/images/examplebook.jpg") }}" alt="" style="height:290px">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr>

            <section id="bookList" class="bookList">
                <div class="d-flex flex-column gap-3">
                    <h3>Daftar Buku</h3>
                    <div class="d-flex flex-column">

                        <div class="row p-3 border-bottom" style="height: 220px">
                            <div class="col-md-2 h-100">
                                <img src="{{ asset("assets/images/examplebook.jpg") }}" alt="" class="h-100">
                            </div>
                            <div class="col-md-10">
                                <label class="">Morgan Housel</label>
                                <h4>Psychology Of Money</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus dolor, sint quia, deleniti ea corrupti placeat quasi magni eos omnis explicabo dolorum. Temporibus eos voluptatum veniam quia quo! Nesciunt aliquam repellat iure placeat praesentium laborum et, voluptatum ut molestias ducimus laboriosam facilis sint accusantium! Quae, odit soluta? Dolor, ratione neque?</p>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="">Lihat selengkapnya &#10095;</a>
                                    <label>8 September 2020</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-3 border-bottom" style="height: 220px">
                            <div class="col-md-2 h-100">
                                <img src="{{ asset("assets/images/examplebook2.jpg") }}" alt="" class="h-100">
                            </div>
                            <div class="col-md-10">
                                <label class="">Morgan Housel</label>
                                <h4>Psychology Of Money</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus dolor, sint quia, deleniti ea corrupti placeat quasi magni eos omnis explicabo dolorum. Temporibus eos voluptatum veniam quia quo! Nesciunt aliquam repellat iure placeat praesentium laborum et, voluptatum ut molestias ducimus laboriosam facilis sint accusantium! Quae, odit soluta? Dolor, ratione neque?</p>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="">Lihat selengkapnya &#10095;</a>
                                    <label>8 September 2020</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-3 border-bottom" style="height: 220px">
                            <div class="col-md-2 h-100">
                                <img src="{{ asset("assets/images/examplebook.jpg") }}" alt="" class="h-100">
                            </div>
                            <div class="col-md-10">
                                <label class="">Morgan Housel</label>
                                <h4>Psychology Of Money</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus dolor, sint quia, deleniti ea corrupti placeat quasi magni eos omnis explicabo dolorum. Temporibus eos voluptatum veniam quia quo! Nesciunt aliquam repellat iure placeat praesentium laborum et, voluptatum ut molestias ducimus laboriosam facilis sint accusantium! Quae, odit soluta? Dolor, ratione neque?</p>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="">Lihat selengkapnya &#10095;</a>
                                    <label>8 September 2020</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-3 border-bottom" style="height: 220px">
                            <div class="col-md-2 h-100">
                                <img src="{{ asset("assets/images/examplebook.jpg") }}" alt="" class="h-100">
                            </div>
                            <div class="col-md-10">
                                <label class="">Morgan Housel</label>
                                <h4>Psychology Of Money</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus dolor, sint quia, deleniti ea corrupti placeat quasi magni eos omnis explicabo dolorum. Temporibus eos voluptatum veniam quia quo! Nesciunt aliquam repellat iure placeat praesentium laborum et, voluptatum ut molestias ducimus laboriosam facilis sint accusantium! Quae, odit soluta? Dolor, ratione neque?</p>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="">Lihat selengkapnya &#10095;</a>
                                    <label>8 September 2020</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-3 border-bottom" style="height: 220px">
                            <div class="col-md-2 h-100">
                                <img src="{{ asset("assets/images/examplebook.jpg") }}" alt="" class="h-100">
                            </div>
                            <div class="col-md-10">
                                <label class="">Morgan Housel</label>
                                <h4>Psychology Of Money</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus dolor, sint quia, deleniti ea corrupti placeat quasi magni eos omnis explicabo dolorum. Temporibus eos voluptatum veniam quia quo! Nesciunt aliquam repellat iure placeat praesentium laborum et, voluptatum ut molestias ducimus laboriosam facilis sint accusantium! Quae, odit soluta? Dolor, ratione neque?</p>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="">Lihat selengkapnya &#10095;</a>
                                    <label>8 September 2020</label>
                                </div>
                            </div>
                        </div>

                    </div>
            </section>
        </div>
    </div>

</div>

@endsection