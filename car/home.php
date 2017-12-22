<html>
	<head>
		<title>Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--BASIC CSS ON PAGE -->
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<!--SLIDER CSS-->
		<link rel="stylesheet" type="text/css" href="slide.css">
		<!--START  CALENDER -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><!--END  CALENDER -->
	</head>
	<body bgcolor=" #DDDDDD">
		<form method="post">
			 <div class="div1">
				<img class="image1" src="car.png" height="200">
				<h1>Car Rental</h1>
				
			 </div>	
			<ul>
			  <li><a class="active" href="home.php">HOME</a></li>
			  <li><a href="abtus.php">ABOUT US</a></li>
			  <li><a href="book.php">BOOK A CAR</a></li>
			  <li><a href="register.php">REGISTER</a></li>
			  <li><a href="login.php">LOGIN</a></li>
			  <li><a href="contact.php">CONTACT US</a></li>
			</ul>

			<div class="w3-content w3-section" style="max-width:75%;">
			  <img class="mySlides w3-animate-fading" src="city/cities.jpg" style="width:100%; height:500px;">
			  <img class="mySlides w3-animate-fading" src="city/maruti.png" style="width:100%; height:500px;">
			  <img class="mySlides w3-animate-fading" src="city/toyota.jpg" style="width:100%; height:500px;">
			  <img class="mySlides w3-animate-fading" src="city/mahindra.png" style="width:100%; height:500px;">
			  <img class="mySlides w3-animate-fading" src="city/tata.png" style="width:100%; height:500px;">
			</div>
			
			<table class="table1">
			<tr>
			<td>
			<center>
			<span><img src="search1.png" style="width:25px; height:25px;" /></span><span class="span1">&nbsp;&nbsp; Search for a car rental</span><br><br><br>
			<select class="drpdwn">
			  <option value="0">Select City</option>
			  <option value="saab">Mumbai</option>
			  <option value="opel">Delhi</option>
			  <option value="audi">Bangalore</option>
			  <option value="audi">Kolkata</option>
			  <option value="audi">Hyderabad</option>
			  <option value="audi">Jaipur</option>
			</select><br><br>
			<input type="text" id="datepicker" placeholder="SELECT PICKUP DATE" name="search"><br>
			<input type="text" id="datepicker1" placeholder="SELECT DROP DATE" name="search"><br><br><br>
			<input type="submit" name="submit" value="SEARCH NOW" class="searchbtn" /><br>
			</center>
			<td>
			</tr>
			</table>
			
			<div class="div2">
				<span style="position:relative; left:40;" > &copy 2016 Car Rentals Pvt. Ltd. - All Rights Reserved.</span>
				<span style="position:relative; left:600;" >Site By: Rohit & Avinash</span>
			</div>

			<script>
				var myIndex = 0;
			carousel();

			function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) {
				   x[i].style.display = "none";  
				}
				myIndex++;
				if (myIndex > x.length) {myIndex = 1}    
				x[myIndex-1].style.display = "block"; 
					
				setTimeout(carousel, 5000);    
			}
			</script>
			<script>
			  $( function() {
				$( "#datepicker" ).datepicker();
			  } );
			  $( function() {
				$( "#datepicker1" ).datepicker();
			  } );
		  </script>

		</form>
	</body>
</html>	