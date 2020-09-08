@extends('layout')

@section('content')

    <h2>Create new tag</h2>

    <hr/>

    <form method="POST" action="/tag">
        @include('tag._form', ['submitButtonText' => 'Create tag'])
    </form>

@stop
