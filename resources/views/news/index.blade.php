@extends('layout')

@section('content')

    <h2>News</h2>

    <hr/>

    <div class="form-group">
        {!! Form::button('Manage categories', ['onclick' => 'location="/category"', 'type' => 'submit', 'class' => 'btn btn-primary']) !!}
        {!! Form::button('Manage tags', ['onclick' => 'location="/tag"', 'class' => 'btn btn-primary']) !!}
        {!! Form::button('Create news item', ['onclick' => 'location="/news/create"', 'class' => 'btn btn-success']) !!}
    </div>

    @unless (Route::currentRouteName())
        <div class="text-center">
        {{@$news->links()}}
        </div>
    @endunless

    <ul class="list-group">
        @foreach($news as $newsItem)
            <li class="list-group-item">
                <div class="pull-right text-center">
                    <b>{{ $newsItem->created_at->format('Y-m-d') }}</b><br/>
                    [ <a href="/news/{{ $newsItem->id }}/edit">edit</a> | <a href="/news/{{ $newsItem->id }}/delete" onclick="return confirm('Are you sure you want to delete it?')">delete</a> ]
                </div>

                <h3><a href="/news/{{ $newsItem->id }}">{{ $newsItem->title }}</a></h3>

                {!! nl2br(e($newsItem->body)) !!}

                @unless($newsItem->tags->isEmpty())
                    <h5>Tags:
                        @foreach($newsItem->tags as $tag)
                            <a href="/tag/{{ $tag->name }}">{{ $tag->name }}</a>
                        @endforeach
                    </h5>
                @endunless

                @if($newsItem->category)
                    <h5>Category: <b>{{ $newsItem->category->title }}</b></h5>
                @endif

                {{ $newsItem->categories }}
            </li>
        @endforeach
    </ul>

    @unless (Route::currentRouteName())
        <div class="text-center">
            {{@$news->links()}}
        </div>
    @endunless
@stop
