@extends('layout')

@section('content')

    <h2>Edit category</h2>

    <hr/>

    <form method="POST" action="/category/{{$category->id}}">
        @method('PATCH')
        @include('category._form', ['submitButtonText' => 'Update category'])
    </form>

@stop
