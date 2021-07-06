@extends('layout.main')

@section('content')

<h4>Dashbaord</h4>

<h5>Selamat Kembali {{ Auth::user()->name; }}</h5>



<form action="{{ route('logout') }}" method="POST">
@csrf
<button class="btn btn-primary">LOGOUT</button>
</form>

@endsection