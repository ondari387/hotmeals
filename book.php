<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hotmeals Restaurant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.11.2-web/fontawesome.min/cs">
</head>
<body>
<!--Table Booking-->
<h1 class="text-center pt-3" style="color:  #0096A3;">HotMeals Restaurant Table Reservation System</h1>
<div class="main booking">
	<form class="form" action="includes/processing.php" method="POST" style="padding-top: 20px;">
		<h3 class="text-center title2 pt-1 pb-3">Personal Details</h3>
		<div class="row">
			<div class="col-md-3 m-auto" >
				
				<div class="form-group">
					<label>First Name:</label><br>
					<input type="text" name="fname" class="form-control" required>
				</div>
			</div>
			<div class="col-md-3 m-auto" >
				<div class="form-group">
					<label>Last Name:</label><br>
					<input type="text" name="lname" class="form-control" required>
				</div>
			</div>
			<div class="col-md-3 m-auto" >
				<div class="form-group">
					<label>Phone:</label><br>
					<input type="text" name="phone" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 m-auto" >
				<div class="form-group">
					<label>Email:</label><br>
					<input type="text" name="email" class="form-control" required>
				</div>
			</div>
			<div class="col-md-3 m-auto"></div>
			<div class="col-md-3 m-auto"></div>
		</div>
		<h3 class="text-center title2 pt-3 pb-3">Booking Details</h3>
		<div class="row">
			<div class="col-md-3 m-auto" >
				<div class="form-group">
					<label>Date:</label><br>
					<input type="date" name="date" class="form-control" required>
				</div>
			</div>
			<div class="col-md-3 m-auto" >
				<div class="form-group">
					<label>Time:</label><br>
					<input type="time" name="time" class="form-control" required>
				</div>
			</div>
			<div class="col-md-3 m-auto" >
				<div class="form-group">
					<label>Number of people expected:</label><br>
					<input type="text" name="num_people" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 m-auto" >
				<div class="form-group">
					  <label for="confidentiality_level">Level of table's confidentiality:</label>
					  <select class="form-control" name="confidentiality_level" required>
					  	<option value=""hidden selected>Select level</option>
					    <option value="Highly Confidential">Highly Confidential</option>
					    <option value="Partially Confidential">Partially Confidential</option>
					    <option value="Less Confidential">Less Confidential</option>
					  </select>
					</div>
				</div>
			<div class="col-md-3 m-auto">
				<div class="form-group">
					<label>Amount:</label><br>
					<input type="text" name="amount" class="form-control">
				</div>
			</div>
			<div class="col-md-3 m-auto">
				<button data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-block btn-lg btn-primary" type="submit" name="submit">SUBMIT</button>
			

				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Please confirm the details below</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<h6 class="">Personal details</h6>
				    	<?php 
				    	
				    		$fname = $_POST["fname"];
				    		$fname = $_POST["lname"];
				    	

				    	echo $fname;
				    	;?>

				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn" data-dismiss="modal">Cancel</button>
				        <button type="button" class="btn">Confirm</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</form>
	
</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>