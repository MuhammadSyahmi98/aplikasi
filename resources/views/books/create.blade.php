@extends('layout.main')

@section('content')

<div class="row mb-5 mt-5">
    <div class="col">

        <!-- display alert after succcess update -->
        

        @if($errors->any())

        <p class="alert alert-danger">
         Please check your input
        </p>

        @endif

        <a href="{{ route('book-listing') }}">Back to Book Listing</a>

        <h4>ADD NEW BOOK</h4>

        <form method="POST" action="{{ route('book-store') }}">
        @csrf
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Title</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputText" value="{{ old('title') }}">

                @error('title')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{old('price')}}">
                @error('price')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="synopsis" class="form-label">Synopsis</label>
                <textarea name="synopsis" id="synopsis" class="form-control @error('synopsis') is-invalid @enderror" rows="10">{{ old('synopsis') }}</textarea>
                @error('synopsis')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <button class="btn btn-primary">ADD</button>

        </form>




    </div>
</div>


@endsection