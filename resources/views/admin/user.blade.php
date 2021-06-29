@extends('layout.main')


@section('content')
<div class="row">
    <div class="col">
        <h1>User information</h1>

        <p><strong>Name: </strong>{{ $user['name'] }}</p>
        <p><strong>Email: </strong>{{ $user['email'] }}</p>
        <p><strong>Course: </strong>{{ $user['course'] }}</p>

    </div>
</div>

@endsection