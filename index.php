<!DOCTYPE html>
<html>
<head>
	<title>BASE APPAREL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
	
	<div id="home">
		<div id="logo">
			
			<img src="images/logo.svg">
		    
		</div>
		<div id="hero-img">
		</div>
		<div id="pinkbg">
			
			<div id="bg-pattern-desktop">
			    <div id="text">
			    <p class="p-font-size" style="color:hsl(0, 36%, 70%);font-weight:300; letter-spacing: 15px; ">WE'RE</p>
			    <p class="p-font-size" style="color:hsl(0, 6%, 24%);font-weight: 600;letter-spacing: 15px;">COMING SOON</p>
			    <p id="intro">Hello fellow shoppers! We are currently building our new fashion store. Add your email below to stay up-to-date with our announcements and launch deals.</p>
			    <form action="index.php" novalidate="novalidate">
			
			    	<input id="email" onclick="redborder()" type="email" autocomplete="off" name="" placeholder="Email-Address">
			    	
			    	<button id="active" type="submit" onclick="checkemail()" name="submit" value=""><img src="images/icon-arrow.svg"></button>
			    	
			    </form>
			    </div>
			</div>
		</div>
       
	</div>
<script type="text/javascript">
	function redborder(){
		var e = document.getElementById('email');
		document.getElementById('email').style.border="1px solid hsl(359,66%,66%)";
		   
	}

	function checkemail(){
		var e = document.getElementById('email');
		
		if (e.checkValidity() && e.value!=''){
		
		}
		else{
			document.getElementById('email').style.border="1px solid hsl(359,66%,66%)";
		    document.getElementById('email').style.boxShadow="-2px 4px 6px 2px hsl(0,60%,91%)";
		    $('#active').before('<div id="error"><img src="images/icon-error.svg"></div>');
		    console.log("there");
		    var newe = document.createElement('div');
		    newe.innerHTML = "<p id='invalid'>Please provide a valid email</p>";
            document.getElementById('text').appendChild(newe);
 
		}	
	}
</script>
</body>
</html>