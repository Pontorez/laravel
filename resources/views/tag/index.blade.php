@extends('layout')

@section('content')

    <h2>Manage tags</h2>

    <hr/>

    <div class="form-group">
        {!! Form::button('Add new tag', ['onclick' => 'location="/tag/create"', 'class' => 'btn btn-success']) !!}
    </div>

    <ul class="list-group">
        @foreach($tags as $tag)
            <li class="list-group-item">
                <div class="pull-right">
                    <a href="/tag/{{ $tag->id }}/edit">edit</a><br/>
                    <a href="/tag/{{ $tag->id }}/delete" onclick="return confirm('Are you sure you want to delete it?')">delete</a>
                </div>
                <h4>{{ $tag->name }}</h4>

            </li>

        @endforeach
    </ul>
@stop
