@extends('layout')

@section('content')

    <h2>Create news item</h2>

    <hr/>

    @unless (count($categories))
        <div class="alert alert-danger">
            Please <a href="/category/create">create a category</a> first.
        </div>
    @endunless

    {!! Form::open(['url' => '/news']) !!}

    @include('news._form', ['submitButtonText' => 'Create'])

    {!! Form::close() !!}
@stop
