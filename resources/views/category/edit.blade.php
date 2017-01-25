@extends('layout')

@section('content')

    <h2>Edit category</h2>

    <hr/>

    {!! Form::model($category, ['method' => 'patch', 'url' => "/category/$category->id"]) !!}

    @include('category._form', ['submitButtonText' => 'Update category'])

    {!! Form::close() !!}

@stop
