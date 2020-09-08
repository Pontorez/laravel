@include('errors.list')
@csrf

<div class="form-group">
    <label for="title">Title:</label>
    <input class="form-control" name="title" type="text" value="{{isset($news) ? $news->title : ''}}" id="title">
</div>

<div class="form-group">
    <label for="body">Text:</label>
    <textarea class="form-control" name="body" cols="50" rows="10" id="body">{{isset($news) ? $news->body : ''}}</textarea>
</div>

<div class="form-group">
    <label for="created_at">Publish date:</label>
    <input class="form-control" name="created_at" type="date" value="<?= isset($news) ? $news->created_at->format('Y-m-d') : date('Y-m-d') ?>" id="created_at">
</div>

<div class="form-group">
    <label for="category_id">Category:</label>
    <select class="form-control" id="category_id" name="category_id">
        <?php
            foreach ($categories as $i => $category) {
                ?><option <?=isset($news) && $news->category_id == $i ? 'selected="selected" ':'' ?>value="<?=$i?>"><?=$category?></option><?php
            }
        ?>
    </select>
</div>

@unless(empty($allTags))
    <div class="form-group">
        <label for="category_id">Tags (use Ctrl+Click to select multiple tags):</label>
        <select multiple="multiple" class="form-control" id="tags[]" name="tags[]">
        <?php
            foreach ($allTags as $tagId => $tagName) {
                ?><option <?=in_array($tagId, $tags) ? 'selected="selected" ':'' ?>value="<?= $tagId ?>"><?= $tagName ?></option><?php
            }
        ?>
        </select>
    </div>
@endunless

<div class="form-group">
    <button type="submit" class="btn btn-success">Save news item</button>
    <button onclick="location='/'" class="btn btn-danger" type="button">Cancel</button>
</div>
