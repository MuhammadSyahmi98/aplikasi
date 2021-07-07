@extends('auth.layout')


@section('content')
<h1>Login</h1>
<form class="mt-5" action="{{ route('login') }}" method="POST">
    @csrf

    @if( session('error'))
        <p class="alert alert-danger">{{session('error')}}</p>
    @endif
    
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

    <button class="btn btn-primary">LOGIN</button>

</form>

@endsection