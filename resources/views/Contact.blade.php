@extends('app')

@section('contents')
    <h1>{{ $title }}</h1>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book }}</li>
        @endforeach
    </ul>
@endsection
