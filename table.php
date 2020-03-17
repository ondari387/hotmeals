<?php
 include "header.php";
?>
<h3 class="text-center table_header">Please proceed to book a table</h3>
<form class="form col-md-5 m-auto pt-4" action="includes/processing.php" method="POST">
	<div class="form-group">
		<label>Full Name:</label><br>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Phone Number:</label><br>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">+254</span>
			</div>
			<input type="text" name="phone" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label>Date:</label>
		<div class="input-group">
			<input type="text" name="date" class="form-control" placeholder="Date format: dd/mm/yyyy">
			<div class="input-group-append">
				<span class="input-group-text">Calender</span>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Time: </label><br>
		<input type="text" name="time" class="form-control" placeholder="Enter time from: _ am/pm to: _ am/pm ">
	</div>
	<input type="submit" value="SUBMIT" class="btn btn-block btn-lg btn-primary" type="button" name="submit">
</form>

