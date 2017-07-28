<?php $data = $template_data['feature_category'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing feature_category</h2>
<form method="POST" action="/feature_categories/edit/<?=$data['cat_id']?>">
	<label style='text-transform: capitalize;'>cat name</label><br>
	<input type="text" class="form-control" name="cat_name" value="<?=$data["cat_name"]?>"><br>
	<label style='text-transform: capitalize;'>cat description</label><br>
	<input type="text" class="form-control" name="cat_description" value="<?=$data["cat_description"]?>"><br>
	
	<input type="hidden" name="cat_id" value="<?=$data['cat_id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>