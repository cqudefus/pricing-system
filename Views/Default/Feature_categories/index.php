<?php $feature_categories = $template_data['feature_categories'] ?>
<br>
<br>
<div class="table-responsive">
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th style='text-transform: capitalize;'>cat id</th>
				<th style='text-transform: capitalize;'>cat name</th>
				<th style='text-transform: capitalize;'>cat description</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($feature_categories as $data  ): ?>
				<tr>
					<td data-limit-char="20"><?=$data["cat_id"]?></td>
					<td data-limit-char="20"><?=$data["cat_name"]?></td>
					<td data-limit-char="20"><?=$data["cat_description"]?></td>
					
					<td>
						<a href="/feature_categories/edit/<?= $data['cat_id'] ?>">
							<button type="button" class="btn btn-default">Edite</button>
						</a>
						<a href="/feature_categories/delete/<?= $data['cat_id'] ?>">
							<button type="button" class="btn btn-default">Delete</button>
						</a>
						<a href="/feature_categories/view/<?= $data['cat_id'] ?>">
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

