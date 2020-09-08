@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h2>{{ $news->title }}</h2>

            <hr/>

            <p>{!! nl2br(e($news->body)) !!}</p>

            @if(count($news->comments))
                <h3 id="comments">Comments</h3>
                <ul class="list-group">
                    @foreach($news->comments as $comment)
                        <li class="list-group-item">
                            <div class="pull-right">
                                <a href="/comment/{{ $comment->id }}/delete" onclick="return confirm('Are you sure you want to delete it?')">delete</a>
                            </div>

                            Author: {{ $comment->author }} ({{ $comment->created_at }})<br/>
                            <b>{{ $comment->body }}</b>
                            </li>
                    @endforeach
                </ul>
            @endif

            <hr/>
            <h3>Add new comment</h3>

            <form method="POST" action="/comment">
                @csrf

                <input type="hidden" name="news_id" value="{{$news->id}}">
                <div class="form-group">
                    <label for="author">Your name:</label>
                    <input type="text" name="author" id="author" class="form-control" value="{{old('author')}}">
                </div>
                <div class="form-group">
                    <label for="body">Comment:</label>
                    <textarea class="form-control" name="body" cols="50" rows="10" id="body"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" value="Add comment">
                </div>

            </form>

        </div>
    </div>

@stop
