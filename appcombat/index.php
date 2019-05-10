<script type="text/javascript">
	if(localStorage.getItem('email') != null){
		window.location = 'main.php';
	}
</script>
<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>

    <body>
    	<center>
    	<div class="form">
    		<div class="header">Welcome</div>
		<div class="row">

		    <form class="col s12" action="main.php" method="GET">
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="firstMember" type="text" class="validate" required>
		          <label for="firstMember">First Member</label>
		        </div>
		        <div class="input-field col s12">
		          <input id="secondMember" type="text" class="validate" required>
		          <label for="secondMember">Second Member</label>
		        </div>
		        <div class="input-field col s12">
		          <input id="phone" type="number" class="validate" required>
		          <label for="phone">Phone Number</label>
		        </div>
		        <div class="input-field col s12">
		          <input id="email" type="email" class="validate" required>
		          <label for="email">E-Mail</label>
		        </div>
		      </div>
		<!--       <center><input id="redirect" type="submit" name="submit" value="Start" class="waves-effect waves-light btn"></center>      -->
		      <center><a id="redirect" class="waves-effect waves-light btn">Start</a></center>
		    </form>
		</div>
		</div>
		</center>
    	<script type="text/javascript">
			document.getElementById("redirect").onclick = function () {
				var firstMember = document.getElementById('firstMember').value;
				var secondMember = document.getElementById('secondMember').value;
				var phone = document.getElementById('phone').value;
				var email = document.getElementById('email').value;
				var emailreg = "";
				if(firstMember=="" || phone=="" || email==""){
					alert("Please fill all required fields!");
					return false;
				}
				else if(phone.length<10 || phone.length>10){
					alert("Please fill valid Phone Number!");
					return false;
				}
				else{
					localStorage.setItem("firstMember", firstMember);
					localStorage.setItem("secondMember", secondMember);
					localStorage.setItem("phone", phone);
					localStorage.setItem("email", email);
					location.href = "main.php";
				}
			};
		</script>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    </body>
  </html>