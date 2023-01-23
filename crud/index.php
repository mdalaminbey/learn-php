<?php include_once './header.php';?>

<?php

if ( !empty( $_REQUEST['full_name'] ) && !empty( $_REQUEST['email'] ) ) {

	$email = email_validation( $_REQUEST['email'] );

	/**
	 * Email validation
	 */
	if( false === $email ) {
		echo "Please enter a valid email";
		exit;
	}
	
	/**
	 * Input sanitization
	 */
	$full_name = htmlentities($_REQUEST['full_name'], ENT_QUOTES, 'UTF-8');
	$village   = isset( $_REQUEST['village'] ) ? htmlentities($_REQUEST['village'], ENT_QUOTES, 'UTF-8') : '';

	/**
	 * Length Validation
	 */



	$insert_query = "INSERT INTO servay (full_name, email, village) VALUES ('{$full_name}', '{$email}', '{$village}')";

	$connection_db = connection_db();

	$connection_db->query( $insert_query );
}

?>
<div class="container">
	<div class="row">
		<form method="post" target="">
			<div class="mb-3">
				<label class="form-label">Full Name <span style="color:red">*</span></label>
				<input type="text" name="full_name" class="form-control">
			</div>
			<div class="mb-3">
				<label class="form-label">Email address <span style="color:red">*</span></label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="mb-3">
				<label class="form-label">Village (Optional)</label>
				<input type="village" name="village" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

<?php include_once get_root_dir( '/crud/footer.php' );?>