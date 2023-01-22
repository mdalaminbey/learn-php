<?php include_once './header.php'; ?>

<?php

if(!empty($_POST['name']) && !empty($_POST['email'])) {	
	var_dump($_POST);
}
?>
<div class="container">
	<div class="row">
		<form method="post" target="">
			<div class="mb-3">
				<label class="form-label">Full Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="mb-3">
				<label class="form-label">Email address</label>
				<input type="email" name="email" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

<?php include_once get_root_dir('/crud/footer.php'); ?>