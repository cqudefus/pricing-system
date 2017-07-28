<?php $data = $template_data['user'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Viewing user</h2>
<form >
	<label style='text-transform: capitalize;'>user name</label><br>
	<input type="text" readonly class="form-control" name="user_name" value="<?=$data["user_name"]?>"><br>
	<label style='text-transform: capitalize;'>user lastname</label><br>
	<input type="text" readonly class="form-control" name="user_lastname" value="<?=$data["user_lastname"]?>"><br>
	<label style='text-transform: capitalize;'>user fullname</label><br>
	<input type="text" readonly class="form-control" name="user_fullname" value="<?=$data["user_fullname"]?>"><br>
	<label style='text-transform: capitalize;'>user ref role</label><br>
	<input type="text" readonly class="form-control" name="user_ref_role" value="<?=$data["user_ref_role"]?>"><br>
	<label style='text-transform: capitalize;'>user cellphone</label><br>
	<input type="text" readonly class="form-control" name="user_cellphone" value="<?=$data["user_cellphone"]?>"><br>
	<label style='text-transform: capitalize;'>user email</label><br>
	<input type="text" readonly class="form-control" name="user_email" value="<?=$data["user_email"]?>"><br>
	<label style='text-transform: capitalize;'>user password</label><br>
	<input type="text" readonly class="form-control" name="user_password" value="<?=$data["user_password"]?>"><br>
	
	<input type="hidden" name="user_id" value="<?=$data['user_id']?>">
	<a href="/users" class="btn btn-primary">Go Back</a>
</form>