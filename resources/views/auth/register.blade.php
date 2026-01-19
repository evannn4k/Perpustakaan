@extends("layout.base")

@section("main")

<div class="background-1">
    <div class="bg-white bg-gradient bg-opacity-75">
        <div class="position-relative">
            <a href="{{ route("index") }}" class="btn btn-dark position-absolute m-3"><i class="fa-solid fa-circle-left"></i> Kembali</a>
            <div class="container">
                <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
                    <div class="w-100 row">
                        <div class="shadow col-md-4 offset-md-4 bg-white p-4 rounded-4">
                            <form>
                                <h3 class="text-center m-3">Register</h3>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                                <div class="text-center mt-3">
                                    <div>Already have an account? Please <a href="{{ route("login") }}">Log-in</a>.</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection