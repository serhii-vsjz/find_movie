@extends('app')
@section('title', 'search')
@section('content')

<div class="wrapper">
    <div class="sample">
        <form action="{{ route('search') }}" method="post">
            @csrf
            <input class="input-lg" type="text" name="title" placeholder="The Matrix"/>
            <button class="btn btn-primary" type="submit">search</button>
        </form>
        <prop-component id="gallery" v-bind:urldata="{{ json_encode($films) }}"></prop-component>
    </div>
</div>
<style>
    .sample {
        width: 90%;
        align-content: center;
    }
</style>

@endsection
