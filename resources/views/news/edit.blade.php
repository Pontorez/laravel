@extends('layout')

@section('content')

    <h2>Edit news item</h2>

    <hr/>
    <form method="POST" action="/news/{{$news->id}}">
        @method('PATCH')
        @include('news._form', ['submitButtonText' => 'Update news item'])
    </form>

@stop
