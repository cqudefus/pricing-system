<?php $features = $template_data['features'] ?>
<br>
<br>
<div class="table-responsive">
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th style='text-transform: capitalize;'>id</th>
				<th style='text-transform: capitalize;'>ref cat id</th>
				<th style='text-transform: capitalize;'>name</th>
				<th style='text-transform: capitalize;'>description</th>
				<th style='text-transform: capitalize;'>notes</th>
				<th style='text-transform: capitalize;'>published date</th>
				<th style='text-transform: capitalize;'>visible to clients</th>
				<th style='text-transform: capitalize;'>invisible to role</th>
				<th style='text-transform: capitalize;'>icon link</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($features as $data  ): ?>
				<tr>
					<td data-limit-char="20"><?=$data["id"]?></td>
					<td data-limit-char="20"><?=$data["ref_cat_id"]?></td>
					<td data-limit-char="20"><?=$data["name"]?></td>
					<td data-limit-char="20"><?=$data["description"]?></td>
					<td data-limit-char="20"><?=$data["notes"]?></td>
					<td data-limit-char="20"><?=$data["published_date"]?></td>
					<td data-limit-char="20"><?=$data["visible_to_clients"]?></td>
					<td data-limit-char="20"><?=$data["invisible_to_role"]?></td>
					<td data-limit-char="20"><?=$data["icon_link"]?></td>
					
					<td>
						<a href="/features/edit/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Edite</button>
						</a>
						<a href="/features/delete/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Delete</button>
						</a>
						<a href="/features/view/<?= $data['id'] ?>">
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

