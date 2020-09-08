@extends('layout')

@section('content')

    <h2>Create new category</h2>

    <hr/>

    <form method="POST" action="/category">
        @include('category._form', ['submitButtonText' => 'Create category'])
    </form>

@stop
