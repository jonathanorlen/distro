<link href="<?php echo base_url();?>Assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>Assets/plugins/font-awesome/fontawesome.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>Assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>Assets/plugins/bootstrap/bootstrap.min.js"></script>
 
<form method="POST" action="">
	Email: <input type="text" name="email"><br/>
	Pass: <input type="password" name="pass"><br/>
	<input type="submit" name="login"><br/>
</form>
 
<?php
 
validation_errors() !="" ? $this->master->alert("Error",validation_errors()) : ""; // throw validation errors
$msg !="" ? $this->master->alert("Success",$msg) : ""; // throw success message