<?php $data = $template_data['feature_price'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing feature_price</h2>
<form method="POST" action="/feature_prices/edit/<?=$data['price_id']?>">
	<label style='text-transform: capitalize;'>price</label><br>
	<input type="text" class="form-control" name="price" value="<?=$data["price"]?>"><br>
	<label style='text-transform: capitalize;'>price note</label><br>
	<input type="text" class="form-control" name="price_note" value="<?=$data["price_note"]?>"><br>
	<label style='text-transform: capitalize;'>price description</label><br>
	<input type="text" class="form-control" name="price_description" value="<?=$data["price_description"]?>"><br>
	
	<input type="hidden" name="price_id" value="<?=$data['price_id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>