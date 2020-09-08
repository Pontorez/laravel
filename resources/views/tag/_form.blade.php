@include('errors.list')
@csrf

<div class="form-group">
    <label for="name">Tag name:</label>
    <input class="form-control" name="name" type="text" id="name" value="{{isset($tag) ? $tag->name : ''}}">
</div>

<div class="form-group">
    <input class="btn btn-success" type="submit" value="{{$submitButtonText}}">
</div>
