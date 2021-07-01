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
                    <td>
                        <!-- books refer to function in model -->
                  
                            @foreach($author->books as $book)
                            {{$book->title}}<br>
                            @endforeach
                     

                        @if($author->books->count() < 1 )
                            <em>Author dont have any books</em>
                        @endif
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>

@endsection