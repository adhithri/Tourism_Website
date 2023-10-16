<?php
	include('partials/menu.php')
?>
<!-- Main content section starts -->
	<select class="booking">
		<div class="booking-wrapper">
			<form class='	booking-form'>
				<h5>Full Name :</h5><input type="text" class="full-name" placeholder="Enter Your Full Name"><br>
				<h5>county :</h5><input type="text" class="country"><br>
				<h5>Address :</h5><input type="text" class="address" placeholder="Address"><br>
				<h5>Arrival Date :</h5><input type="Date" class="arrival-date" ><br>
				<h5>No of Days :</h5><input type="text" class="days" placeholder="Days"><br>
				<h5>No of People :</h5><input type="text" class="people" placeholder="People"><br>  
		</div>
	</select>
<!-- Main content section ends -->
        <?php
	include('partials/footer.php')
?>