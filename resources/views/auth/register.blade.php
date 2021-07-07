@extends('auth.layout')

@section('content')
<h1>Registration</h1>
<form class="mt-5" action="{{ route('register') }}" method="POST">
    @csrf

    @if($errors->any())
        <p class="alert alert-danger">Please check your input</p>
    @endif
    <div class="mb-3">
        <label for="name">Name</label>
        <input class="form-control  @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input class="form-control  @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}">
        @error('email')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password">Password</label>
        <input class="form-control  @error('password') is-invalid @enderror" type="password" id="password" name="password" value="{{ old('password') }}">
        @error('password')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password1">Password</label>
        <input class="form-control  @error('password_confirmation') is-invalid @enderror" type="password" id="password1" name="password_confirmation" value="{{ old('password_confirmation') }}">
        @error('password_confirmation')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <button class="btn btn-primary">REGISTER</button>

</form>

@endsection