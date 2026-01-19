@extends("layout.base")

@section("main")

<div class="background-1">
    <div class="bg-white bg-gradient bg-opacity-75">
        <div class="position-relative">
            <a href="{{ route("index") }}" class="btn btn-dark position-absolute m-3"><i class="fa-solid fa-circle-left"></i> Kembali</a>
            <div class="container">
                <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
                    <div class="w-100 row">
                        <div class="shadow-lg col-md-4 offset-md-4 bg-white p-4 rounded-4">
                            <form action="{{ route("verify") }}" method="POST">
                                @csrf
                                <h3 class="text-center m-3">Login</h3>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    <div class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="showPw">
                                    <label class="form-check-label" for="showPw">Show password</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                                <div class="text-center mt-3">
                                    <div>Don't have an account? Please <a href="{{ route("register") }}">register</a>.</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("showPw").addEventListener("change", () => {
        let password = document.getElementById("password")
        password.type = (password.type == "password") ? "text" : "password"
    });
</script>

@endsection