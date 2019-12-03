@extends('app')
@section('title', 'search')
@section('content')
    @foreach($films as $film)
        <img src="{{ $film->poster }}">
    @endforeach
    <form action="{{ route('search') }}" method="post">
        @csrf
        <input type="text" name="title"/>
        <input type="submit" value="search"/>
    </form>
    <example-component id="app"></example-component>

@endsection
