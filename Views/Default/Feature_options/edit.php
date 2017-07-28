<?php $data = $template_data['feature_option'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing feature_option</h2>
<form method="POST" action="/feature_options/edit/<?=$data['op_id']?>">
	<label style='text-transform: capitalize;'>op ref feature</label><br>
	<input type="text" class="form-control" name="op_ref_feature" value="<?=$data["op_ref_feature"]?>"><br>
	<label style='text-transform: capitalize;'>op name</label><br>
	<input type="text" class="form-control" name="op_name" value="<?=$data["op_name"]?>"><br>
	<label style='text-transform: capitalize;'>op description</label><br>
	<input type="text" class="form-control" name="op_description" value="<?=$data["op_description"]?>"><br>
	<label style='text-transform: capitalize;'>op price id</label><br>
	<input type="text" class="form-control" name="op_price_id" value="<?=$data["op_price_id"]?>"><br>
	<label style='text-transform: capitalize;'>opt icon link</label><br>
	<input type="text" class="form-control" name="opt_icon_link" value="<?=$data["opt_icon_link"]?>"><br>
	<label style='text-transform: capitalize;'>op visible</label><br>
	<input type="text" class="form-control" name="op_visible" value="<?=$data["op_visible"]?>"><br>
	
	<input type="hidden" name="op_id" value="<?=$data['op_id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>