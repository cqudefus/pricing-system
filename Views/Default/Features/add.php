<h2 style="margin-top: 0;text-transform: capitalize;">New feature</h2>
<form method="POST" action="/features/add">
	<label style='text-transform: capitalize;'>id</label><br>
	<input type='text' class='form-control' name='id' placeholder='id'><br>
	<label style='text-transform: capitalize;'>ref cat id</label><br>
	<input type='text' class='form-control' name='ref_cat_id' placeholder='ref cat id'><br>
	<label style='text-transform: capitalize;'>name</label><br>
	<input type='text' class='form-control' name='name' placeholder='name'><br>
	<label style='text-transform: capitalize;'>description</label><br>
	<input type='text' class='form-control' name='description' placeholder='description'><br>
	<label style='text-transform: capitalize;'>notes</label><br>
	<input type='text' class='form-control' name='notes' placeholder='notes'><br>
	<label style='text-transform: capitalize;'>published date</label><br>
	<input type='text' class='form-control' name='published_date' placeholder='published date'><br>
	<label style='text-transform: capitalize;'>visible to clients</label><br>
	<input type='text' class='form-control' name='visible_to_clients' placeholder='visible to clients'><br>
	<label style='text-transform: capitalize;'>invisible to role</label><br>
	<input type='text' class='form-control' name='invisible_to_role' placeholder='invisible to role'><br>
	<label style='text-transform: capitalize;'>icon link</label><br>
	<input type='text' class='form-control' name='icon_link' placeholder='icon link'><br>
	
	<button type="submit" class="btn btn-primary">Save</button>
</form>