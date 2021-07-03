@extends('layout.main')


@section('content')

<div class="row mt-5 mb-5">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th colspan="2">Name</th>
                </tr>
            </thead>
            <tbody>

                @foreach($authors as $author)
                <tr>
                    <td colspan="2"><strong>{{ $author->name }}</strong></td>

                </tr>
                <tr>
                    <td width="5%"></td>
                    <td><ol>
                        <!-- books refer to function in model -->
                  
                            @foreach($author->books as $book)
                            <li><a href="{{route('book-single', $book->id)}}">{{$book->title}}</a></li><br>
                            @endforeach
                     

                        @if($author->books->count() < 1 )
                            <em>Author dont have any books</em>
                        @endif
                        </ol>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>

@endsection