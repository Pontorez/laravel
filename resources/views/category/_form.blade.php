@include('errors.list')

<div class="form-group">

    {!! Form::label('title', 'Category name:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-success']) !!}
    {!! Form::button('Cancel', ['onclick' => 'location="/category"', 'class' => 'btn btn-danger']) !!}
</div>
