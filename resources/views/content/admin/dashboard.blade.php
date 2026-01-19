@extends("layout.admin")

@section("content")
<div class=""></div>
admin dashboard bos
<h1>HAI {{ auth("admin")->user()->name }}</h1>
<br>
<a href="{{ route("logout") }}">logout</a>
@endsection