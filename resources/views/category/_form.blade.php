@include('errors.list')
@csrf

<div class="form-group">
    <label for="title">Category name:</label>
    <input class="form-control" name="title" type="text" value="{{isset($category) ? $category->title : ''}}" id="title">
</div>

<div class="form-group">
    <input class="btn btn-success" type="submit" value="Save category">
    <button onclick="location='/category'" class="btn btn-danger" type="button">Cancel</button>
</div>
