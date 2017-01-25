@extends('layout')

@section('content')

    <h2>Create new category</h2>

    <hr/>

    {!! Form::open(['url' => '/category']) !!}

    @include('category._form', ['submitButtonText' => 'Create category'])

    {!! Form::close() !!}

@stop
