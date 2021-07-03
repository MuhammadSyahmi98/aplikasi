@extends('layout.main')


@section('content')

<div class="row mt-5">
    <div class="col">
        <!-- display alert after succcess update -->
        @if(session('success'))

        <p class="alert alert-success">
            {{ session('success') }}
        </p>

        @endif

        <a class="btn btn-primary" href="{{ route('book-create') }}">ADD</a>
        <div class="table">
            <h3>Book Listing</h3>
            <table class="table">
                <thead class="tr">
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>PRICE</th>
                    <th>AUTHOR</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>

                        <td><a href="{{ route('book-single', $book->id) }}">{{ $book->title }}</a></td>
                        <td>RM {{ $book->price }}</td>
                        <td>
                            <ol>
                                @foreach($book->authors as $author)
                                 <li>{{$author->name}}</li>   
                                @endforeach
                            </ol>
                        </td>
                        <td>
                            <a href="{{ route('book-edit', $book->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                            <form class="d-inline" action="{{ route('book-destroy', $book->id) }}" method="POST"  onsubmit="return confirm('Are sure want to delete book titled {{ $book->title }}')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">DELETE</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $books->links() }}
        </div>
    </div>
</div>


@endsection