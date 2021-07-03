@extends('layout.main')

@section('content')
<div class="row mb-5 mt-5">
    <div class="col">
        <h1>Book information</h1>

        <p><strong>Title: </strong>{{ $book->title }}</p>
        <p><strong>Synopsis: </strong>{{ $book->synopsis }}</p>
        <p><strong>Price: </strong>{{ $book->price }}</p>
        <p><strong>Author(s): </strong><ol>
        @foreach($book->authors as $author)
            <li>{{ $author->name }}</li>
        @endforeach
        </ol></p>

    </div>
</div>


@endsection