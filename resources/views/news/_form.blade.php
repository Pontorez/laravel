@include('errors.list')

{!! Form::open(['url' => '/news']) !!}
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Text:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('created_at', 'Publish date:') !!}
    {!! Form::input('date', 'created_at', isset($news) ? $news->created_at->format('Y-m-d') : date('Y-m-d') , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id', $categories, isset($news) ? $news->category->id : null, ['class' => 'form-control']) !!}
</div>

@unless(empty($allTags))
    <div class="form-group">
        {!! Form::label('tags[]', 'Tags (use Ctrl+Click to select multiple tags):') !!}

        {!! Form::select('tags[]', $allTags, $tags, ['multiple' => 'multiple', 'class' => 'form-control']) !!}
    </div>
@endunless

<div class="form-group">
    {!! Form::button($submitButtonText, ['type' => 'submit', 'class' => 'btn btn-success']) !!}
    {!! Form::button('Cancel', ['onclick' => 'location="/"', 'class' => 'btn btn-danger']) !!}
</div>
