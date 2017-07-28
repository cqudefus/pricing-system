<?php $users = $template_data['users'] ?>
<br>
<br>
<div class="table-responsive">
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th style='text-transform: capitalize;'>user id</th>
				<th style='text-transform: capitalize;'>user name</th>
				<th style='text-transform: capitalize;'>user lastname</th>
				<th style='text-transform: capitalize;'>user fullname</th>
				<th style='text-transform: capitalize;'>user ref role</th>
				<th style='text-transform: capitalize;'>user cellphone</th>
				<th style='text-transform: capitalize;'>user email</th>
				<th style='text-transform: capitalize;'>user password</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $data  ): ?>
				<tr>
					<td data-limit-char="20"><?=$data["user_id"]?></td>
					<td data-limit-char="20"><?=$data["user_name"]?></td>
					<td data-limit-char="20"><?=$data["user_lastname"]?></td>
					<td data-limit-char="20"><?=$data["user_fullname"]?></td>
					<td data-limit-char="20"><?=$data["user_ref_role"]?></td>
					<td data-limit-char="20"><?=$data["user_cellphone"]?></td>
					<td data-limit-char="20"><?=$data["user_email"]?></td>
					<td data-limit-char="20"><?=$data["user_password"]?></td>
					
					<td>
						<a href="/users/edit/<?= $data['user_id'] ?>">
							<button type="button" class="btn btn-default">Edite</button>
						</a>
						<a href="/users/delete/<?= $data['user_id'] ?>">
							<button type="button" class="btn btn-default">Delete</button>
						</a>
						<a href="/users/view/<?= $data['user_id'] ?>">
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

