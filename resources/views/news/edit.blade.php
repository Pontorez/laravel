@extends('layout')

@section('content')

    <h2>Edit news item</h2>

    <hr/>

    {!! Form::model($news, ['method' => 'patch', 'url' => "/news/$news->id"]) !!}

    @include('news._form', ['submitButtonText' => 'Update news item'])

    {!! Form::close() !!}

@stop
