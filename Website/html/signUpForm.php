<html>
<head>

			<link rel="stylesheet" href = "../css/index.css">
			<link rel="stylesheet" href="../css/header.css">
			<link rel="stylesheet" href="../css/footer.css">
			<link rel="stylesheet" href="../css/signup.css">

			<script type="text/javascript" src="../javascript/index.js"></script>

			<title>Dave's property managment</title>

			<div id="header">

				<div id="logo">
					<img src="../images/logo_concept.jpg" alt="Logo" width="180">
				</div>

				<div id="login">
					<ul>
						<li class="login"><a href="login.html"><img src="../images/LoginButton.png" style="width:70px"></a></li>
						<li class="Sign Up"><a href="signup.html"><img src="../images/SignUp.png" style="width:70px"></a></li>
					</ul>
				</div>



				<div id="nav">
					<ul>
						<li class="Home"><a href="index.html">Home</a></li>
						<li class="Properties"><a href="properties.html">Properties</a></li>
						<li class="Contact"><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>

		</head>
<body>

<h2> Welcome <?php echo $_POST["username"]; ?> </h2> <br> 
<p> Please verify your personal information as follows: </p>


<?php

	
		foreach ($_POST as $key => $value)
		echo "$key = $value<br/>";
		//echo "($key) => ($value)<br/>";
		//$name = $_POST['surname'];
		//$email = $_POST["email"];
		// now do something with $name
	
?>

</body>
</html>