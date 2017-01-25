@extends('layout')

@section('content')

    <h2>Manage categories</h2>

    <hr/>

    <div class="form-group">
        {!! Form::button('Add new category', ['onclick' => 'location="/category/create"', 'class' => 'btn btn-success']) !!}
    </div>

    <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item">
                <div class="pull-right">
                    <a href="/category/{{ $category->id }}/edit">edit</a><br/>
                    <a href="/category/{{ $category->id }}/delete" onclick="return confirm('Are you sure you want to delete it?')">delete</a>
                </div>
                <h4>{{ $category->title }}</h4>

            </li>

        @endforeach
    </ul>
@stop
