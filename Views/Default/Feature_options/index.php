<?php $feature_options = $template_data['feature_options'] ?>
<br>
<br>
<div class="table-responsive">
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th style='text-transform: capitalize;'>op id</th>
				<th style='text-transform: capitalize;'>op ref feature</th>
				<th style='text-transform: capitalize;'>op name</th>
				<th style='text-transform: capitalize;'>op description</th>
				<th style='text-transform: capitalize;'>op price id</th>
				<th style='text-transform: capitalize;'>opt icon link</th>
				<th style='text-transform: capitalize;'>op visible</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($feature_options as $data  ): ?>
				<tr>
					<td data-limit-char="20"><?=$data["op_id"]?></td>
					<td data-limit-char="20"><?=$data["op_ref_feature"]?></td>
					<td data-limit-char="20"><?=$data["op_name"]?></td>
					<td data-limit-char="20"><?=$data["op_description"]?></td>
					<td data-limit-char="20"><?=$data["op_price_id"]?></td>
					<td data-limit-char="20"><?=$data["opt_icon_link"]?></td>
					<td data-limit-char="20"><?=$data["op_visible"]?></td>
					
					<td>
						<a href="/feature_options/edit/<?= $data['op_id'] ?>">
							<button type="button" class="btn btn-default">Edite</button>
						</a>
						<a href="/feature_options/delete/<?= $data['op_id'] ?>">
							<button type="button" class="btn btn-default">Delete</button>
						</a>
						<a href="/feature_options/view/<?= $data['op_id'] ?>">
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

