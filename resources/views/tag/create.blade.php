@extends('layout')

@section('content')

    <h2>Create new tag</h2>

    <hr/>

    {!! Form::open(['url' => '/tag']) !!}

    @include('tag._form', ['submitButtonText' => 'Create tag'])

    {!! Form::close() !!}

@stop
