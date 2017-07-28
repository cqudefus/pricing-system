<?php $data = $template_data['feature'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Viewing feature</h2>
<form >
	<label style='text-transform: capitalize;'>ref cat id</label><br>
	<input type="text" readonly class="form-control" name="ref_cat_id" value="<?=$data["ref_cat_id"]?>"><br>
	<label style='text-transform: capitalize;'>name</label><br>
	<input type="text" readonly class="form-control" name="name" value="<?=$data["name"]?>"><br>
	<label style='text-transform: capitalize;'>description</label><br>
	<input type="text" readonly class="form-control" name="description" value="<?=$data["description"]?>"><br>
	<label style='text-transform: capitalize;'>notes</label><br>
	<input type="text" readonly class="form-control" name="notes" value="<?=$data["notes"]?>"><br>
	<label style='text-transform: capitalize;'>published date</label><br>
	<input type="text" readonly class="form-control" name="published_date" value="<?=$data["published_date"]?>"><br>
	<label style='text-transform: capitalize;'>visible to clients</label><br>
	<input type="text" readonly class="form-control" name="visible_to_clients" value="<?=$data["visible_to_clients"]?>"><br>
	<label style='text-transform: capitalize;'>invisible to role</label><br>
	<input type="text" readonly class="form-control" name="invisible_to_role" value="<?=$data["invisible_to_role"]?>"><br>
	<label style='text-transform: capitalize;'>icon link</label><br>
	<input type="text" readonly class="form-control" name="icon_link" value="<?=$data["icon_link"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<a href="/features" class="btn btn-primary">Go Back</a>
</form>