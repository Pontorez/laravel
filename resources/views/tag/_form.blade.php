@include('errors.list')

<div class="form-group">
    {!! Form::label('name', 'Tag name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-success']) !!}
</div>
