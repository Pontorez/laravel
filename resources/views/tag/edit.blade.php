@extends('layout')

@section('content')

    <h2>Edit tag</h2>

    <hr/>

    {!! Form::model($tag, ['method' => 'patch', 'url' => "/tag/$tag->id"]) !!}

    @include('tag._form', ['submitButtonText' => 'Update tag'])

    {!! Form::close() !!}

@stop
