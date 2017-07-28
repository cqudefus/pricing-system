<?php $data = $template_data['feature_category'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Viewing feature_category</h2>
<form >
	<label style='text-transform: capitalize;'>cat name</label><br>
	<input type="text" readonly class="form-control" name="cat_name" value="<?=$data["cat_name"]?>"><br>
	<label style='text-transform: capitalize;'>cat description</label><br>
	<input type="text" readonly class="form-control" name="cat_description" value="<?=$data["cat_description"]?>"><br>
	
	<input type="hidden" name="cat_id" value="<?=$data['cat_id']?>">
	<a href="/feature_categories" class="btn btn-primary">Go Back</a>
</form>