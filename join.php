<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8" />
  <meta name="google"/>
  <meta name="googlebot"/>
  <meta name="keywords"/>
  <meta name="robots"/>
  <meta name="verify"/>
  <meta name="description" content="">
  <meta http-equiv="default-style"/>
  <meta http-equiv="refresh"/>
  <meta http-equiv="Cache-Control"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forex Trading System 3000</title>
   
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <!--<p>-->
  <link href="https://fonts.googleapis.com/css?family=Cinzel:900" rel="stylesheet"> <!--Headers-->
  <link href="reset.css" rel="stylesheet"  />
  <link href="styles.css" rel="stylesheet"  />
  <!--scripts that defer until after page loads-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="script.js" type="text/javascript" defer></script>
  <script src="openAccount.js" type="text/javascript" defer></script>
  <script src="template.js" type="text/javascript" defer></script>
  <script src="forgot.js" type="text/javascript" defer></script>
  <script src="contact.js" type="text/javascript" defer></script>
  <script src="faq.js" type="text/javascript" defer></script>
  <!--.js modernizr library enables compatability across different browsers-->
  <script src="modernizr.custom.05819.js"></script>
</head>

<body>
   	<header>
      <h1 id="hide_h1">Forex Trading System 3000</h1> <!--style visibility hidden-->
      	<img src="images/forex3000.jpg" alt="Forex Trading System 3000" id="imgLogo" />
      <nav id="nav-main">
         <ul id="active"> 
            <li class="current-item"><a href="index.php">Home</a></li>
            <li><a href="trading.php">Trading</a></li>  
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="join.php">Join</a></li> 
         </ul>      
            <form id="signIn" action=""> 
            	<input type="text" name="signIn" id="account" size="18" placeholder=" Account" required>           
            	<input type="text" name="signIn" id="password" size="18" placeholder=" Password" required> 
             	<input type="image" href="members.php" id="loginBtn" src="images/login.png" width="74" height="28" alt="login"/>
             	<a href="forgot.php" id="forgot">Can't access your account?</a>
            </form>        
      
      <div id="nav-trigger">
    		<span>Menu&nbsp;</span>
	  </div>
	  </nav>
		<nav id="nav-mobile"></nav>      
   </header>
   
   <main>
   	  
   	  <section class="container" id="join-container">
      	<div class="intro">
			<h1>Create An Account</h1>
      <form action="checkout.php" method="post" autocomplete="off"> 
			<fieldset class="colorBkg">
			<fieldset id="personalInfo">
				<legend>Personal Information</legend>
					<label for="uname">Username</label>
					<input type="text" id="uname" name="username" required/>
					<p id="usernameError" class="errorMsg"></p>
					<label for="pw1">Password</label>
					<input type="password" id="pw1" name="password1" required/><span><em>(8&nbsp;char&nbsp;min)</em></span>
					<label for="pw2">Password (confirm)</label>
					<input type="password" id="pw2" name="password2" required/>
					<p id="passwordError" class="errorMsg"></p>
					<label for="email">Email Address</label>
					<input type="email" id="emailbox" name="e-mail" required/>
					<p id="emailError" class="errorMsg"></p>
				    <hr>
					<fieldset id="paypalPayment">
						<input type="radio" id="paypal"> <span>Pay using PayPal or PayPal Credit:&nbsp; </span>
						<input type="submit" value="Pay with PayPal">
					</fieldset>
			</fieldset>
		  </fieldset>
			 
		</form>
 	  
  	  <section id="profile"> <!--display none-->
		   <h3>Profile</h3>
		   <div id="usernameSection">
			  <h4>Username</h4>
			  <p id="profileUsername"></p>
		   </div>
		   <div id="emailSection">
			  <h4>Email address</h4>
			  <p id="profileEmail"></p>
		   </div>
      </section>
				<!--<fieldset class="creditGroup"><!-- display none -->
					<!--To show that a group of radio buttons are associated with the same field, palce inisde a field set-->
					<!--and the name (field) must be the same for all option buttons within a group-->
					<!--<input type="radio"><span>Use a new credit card:&nbsp;</span>
						<img id="ccCards" src="images/MCard.gif" alt="visa">

					<label for="ccNum">Credit Card Number</label> <!--attribute 'for' assocates the label with the input control-->
					<!--<input type="text" id="ccNum" name="cardNumber" pattern="^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$">
					<label for="monthList">Expiration Date</label><br>
					<select name="cardMonth" id="monthList" >
						<option value="">--Month--</option>
						<option value="1">January (01)</option>
						<option value="2">February (02)</option>
						<option value="3">March (03)</option>
						<option value="4">April (04)</option>
						<option value="5">May (05)</option>
						<option value="6">June (06)</option>
						<option value="7">July (07)</option>
						<option value="8">August (08)</option>
						<option value="9">September (09)</option>
						<option value="10">October (10)</option>
						<option value="11">November (11)</option>
						<option value="12">December (12)</option>
					</select>

						 <select name="cardYear" id="yearList" >
							<option value="">--Year--</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
						</select>

						<label for="cvv">Security Code</label><br>
						<!--maxlength and size values for text-->
						<!--<input type="text" id="cvv" placeholder="nnn" pattern="^\d{3}$" maxlength="3" size="3" >
					</fieldset>-->
		  </div>  			
   		  <div class="aside">
   		  	<div id="join-aside">
				<figure class="jim-speaks">
					<img src="images/jim-speaks.jpg" class="jim-speaks-img" height="" width="" alt="" id="">
					<figcaption></figcaption>
				</figure>
				<audio controls id="jim">
					  <source src="jim-speaks.mp3" type="audio/mp3">
					  <source src="jim-speaks.ogg" type="audio/ogg">
				   <p><em>To play this audio clip, your browser needs to support HTML5</em></p>
			   </audio>
   		  	</div>
   		  	<p> </p>
   		  </div>
   	  </section>
   </main>
   
   <footer>
      <nav id="bottom">
         <div id="questions">
         	<h2>Questions or Concerns?</h2><br>
         </div>
        <form class="form-horizontal">
			<div class="form-group">
				<label for="inputName" class="control-label">First Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputName" required>
				</div><br>
			</div>
			<div class="form-group">
				<label for="inputEmail" class="control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputEmail" required>
				</div><br>
				<div class="form-group">
					<label for="customerQuestion" class="control-label">Question:</label>
					<div>
						 <textarea class="form-control" name="CustomText" rows="4" cols="40"></textarea>
							<input type="button" id="contactBtn" value="Contact"> <br><br>		
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				</div> 
			</div>
			<div class="preferEmail">
				<span>Would you prefer our email link instead? <a>support@fts3000.com</a></span>
	        </div>
		</form>
       
        <ul id="shareFooter">
            <li><a href="terms.php">Terms&nbsp;</a></li>        
         	<li><a href="privacy.php">|&nbsp;Privacy&nbsp;</a></li>        
            <li><a href="disclaimer.php">|&nbsp;Disclaimer</a></li>
        </ul>
      </nav>
      <p class="btmFooter">Copyright &copy; 2017 Forex Trading System 3000. All Rights Reserved.</p>
   </footer>
 </body>
</html>
