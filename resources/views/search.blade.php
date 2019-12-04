@extends('app')
@section('title', 'search')
@section('content')

<div class="wrapper">
    <div class="sample">
        <form action="{{ route('search') }}" method="post">
            @csrf
            <input class="form-control" type="text" name="title"/>
            <br>
            <button class="btn btn-success" type="submit">search</button>

        </form>
        <gallery-component id="gallery" v-bind:urldata="{{ json_encode($films) }}"></gallery-component>
    </div>
</div>
<style>
    .wrapper {
        margin: auto;

    }
    .form-control {
        margin: 10px auto 0px;
    }
    .sample {

    }
    .sample input {
        width: 30%;
        border-radius: 10px;
    }
    .sample button {
        margin-bottom: 30px;
    }

</style>

@endsection
