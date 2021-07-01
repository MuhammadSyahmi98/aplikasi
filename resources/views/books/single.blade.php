@extends('layout.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Book information</h1>

        <p><strong>Title: </strong>{{ $book['title'] }}</p>
        <p><strong>Synopsis: </strong>{{ $book['synopsis'] }}</p>
        <p><strong>Price: </strong>{{ $book['price'] }}</p>

    </div>
</div>


@endsection