@extends('layout')

@section('content')

    <h2>Edit tag</h2>

    <hr/>

    <form method="POST" action="/tag/{{$tag->id}}">
        @method('PATCH')
        @include('tag._form', ['submitButtonText' => 'Update tag'])
    </form>

@stop
