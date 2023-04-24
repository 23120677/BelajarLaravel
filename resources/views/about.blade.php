@extends('layouts.main')

@section('container')
<h1 class="text-center">Halaman About</h1>
<h3 class="text-center">{{ $name }}</h3>
<p class="text-center">{{ $email }}</p>
<img src="img/{{ $image }}" width="200" class="img-thumnail rounded-circle d-flex align-items-center justify-content-center">
@endsection
