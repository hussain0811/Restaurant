
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reservation</title>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
	<div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="index.html"><img src="img\95c74b812c06968656e454de1505c1b4.png"></a>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="menu.html"><h5>Menu</h5></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="reserv.php"><h5>Reservations</h5></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="about.html"><h5>About us</h5></a>
		      </li>
	        <li class="nav-item">
	          <a class="nav-link" href="feedback.html"><h5>Feedback</h5></a>
	        </li>
		    </ul>
		  </div>
		</nav>
	</div>

<div class="container">
    <div class="row-flex">
      <div class="flex-column-form">
        <h3 align="center">
          Book a Table
        </h3>
        <hr class='break'>
        </div>
			</div>
      <form class="media-centered" id="booking_form"  method="post" action="connection.php">
          <div class="form-group">
            <p align="center">
            We look forward to welcoming you to our restaurants.
			Your well being is important to us, please note we have introduced new measures into our restaurants, including social distancing, enhanced cleaning and hand sanitiser stations. If you or any of your party are feeling unwell, especially if you have a high temperature, a new persistent cough or a loss of taste or smell, please contact us to cancel your booking.
            </p>
<br><br>
            <input type="text" name="name" class="form-control" id="guest_name" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <input type="number" name="number" class="form-control" id="phonenumber" placeholder="Enter your phone number" required>
          </div>
          <div class="form-group">
            <input type="number" name="guests" class="form-control" id="guest" placeholder="Number of guests" min="1" max="15" required>
          </div>
          <div class="form-group">
            <input type="email" name="mail" class="form-control" id="mail" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <input type="time" name="time" class="form-control" id="time" placeholder="Choose a time" min="10:00" max="22:00" required>
            <small>Open from 10am to 10pm</small>
          </div>
          <div class="form-group">
            <textarea id='mgs' class="form-control" form="booking_form" placeholder="Special requirements" rows="3" name="requirements"></textarea>
            <small>Additional charges may apply</small>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Book</button>
      </form>
      </div>
</div>
<br><br><footer>
  <div class="container text-center text-md-left">
    <div class="row">
      <div class="col-md-2">
        <h5>Details</h5>
        <p>B206-07<br>
        Hussain Valley<br>
      	Ujjain<br></p>
      </div>
      <div class="col-md-2">
        <h5>Contact</h5>
        <p>+123456<br>
        +467595<br>
      	+7899981<br></p>
      </div>
  <hr>
      </div>
    </div>
</footer>

</body>
</html>
