<?php $feature_prices = $template_data['feature_prices'] ?>
<br>
<br>
<div class="table-responsive">
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th style='text-transform: capitalize;'>price id</th>
				<th style='text-transform: capitalize;'>price</th>
				<th style='text-transform: capitalize;'>price note</th>
				<th style='text-transform: capitalize;'>price description</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($feature_prices as $data  ): ?>
				<tr>
					<td data-limit-char="20"><?=$data["price_id"]?></td>
					<td data-limit-char="20"><?=$data["price"]?></td>
					<td data-limit-char="20"><?=$data["price_note"]?></td>
					<td data-limit-char="20"><?=$data["price_description"]?></td>
					
					<td>
						<a href="/feature_prices/edit/<?= $data['price_id'] ?>">
							<button type="button" class="btn btn-default">Edite</button>
						</a>
						<a href="/feature_prices/delete/<?= $data['price_id'] ?>">
							<button type="button" class="btn btn-default">Delete</button>
						</a>
						<a href="/feature_prices/view/<?= $data['price_id'] ?>">
							<button type="button" class="btn btn-default">View</button>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
<script>
	$app.initList(); 
</script>

