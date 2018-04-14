<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
		</script>
		<link rel = "stylesheet" type = "text/css" href = "nav.css">
		<style>
			.panel-default {
				position: relative;
				top: 100px;
				max-width: 40%;
				left: 30px;
			}
			#pos {
				position: relative;
				left: 800px;
				top: -500px;
			}
		</style>
		<script>
			function displayForm(c) {
				if (c.value == "1") {
					document.getElementById("ccformContainer").style.visibility = 'visible';
					document.getElementById("cashContainer").style.visibility = 'hidden';
					document.getElementById("paypalContainer").style.visibility = 'hidden';
				}
				else if (c.value == "2") {
					document.getElementById("ccformContainer").style.visibility = 'hidden';
					document.getElementById("cashContainer").style.visibility = 'visible';
					document.getElementById("paypalContainer").style.visibility = 'hidden';
				}
				else if (c.value == "3") {
					document.getElementById("ccformContainer").style.visibility = 'hidden';
					document.getElementById("cashContainer").style.visibility = 'hidden';
					document.getElementById("paypalContainer").style.visibility = 'visible';
				}
			}
		</script>
	</head>
	<body>
		<nav class="navbar navbar-inverse" >
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" >BOOKATRUCK</a>
</div>
<ul class="nav navbar-nav">
<li><button style="width:auto;" onclick="window.location.href='W_login.php'">Home</button></li>
<li><button style="width:auto;" onclick="window.location.href='W_about.php'">About</button></li>
<li><button style="width:auto;" onclick="window.location.href='W_privacy.php'">Privacy Policy</button></li>
<li><button style="width:auto;" onclick="window.location.href='W_terms.php'">Terms Of Service</button></li>
<li><button style="width:auto;" onclick="window.location.href='W_desclaimer.php'">Disclaimer</button></li>
<li><button style="width:auto;" onclick="window.location.href='W_faq.php'">FAQ</button></li>
<li><button style="width:auto;" onclick="window.location.href='W_contacts.php'">Contacts</button></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><button  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>
<li><button onclick="widow. style="width:auto;">SignUp</button></li>
</ul>
</div>
</nav>
		<form>
			<div class = "panel panel-default">
				<div class = "panel-heading" style = "background-color : #62f781"><b><h3>Payment</h3><b></div>
					<div class="panel-body">
						<input value = "1" type = "radio" name = "formselector" onClick = "displayForm(this)"></input>Via Credit Card<br>
						<input value = "2" type = "radio" name = "formselector" onClick = "displayForm(this)"></input> Cash On Delivery</form><br>
						<input value = "3" type = "radio" name ="formselector" onClick = "displayForm(this)"></input> Paypal</form><br>
					<div style = "visibility:hidden; position: relative" id = "ccformContainer">
						<form id = "ccform">
							<label>Enter your details:</label><br><br>
							<dd>
								<p>Credit Card Name :
								<input type = "text" id = "ccname" name = "ccname">
								</p>
								<p>Credit Card Type :
								<select name="cctype" required>
									<option value = "Visa">Visa</option>
									<option value = "Mastercard">Mastercard</option>
									<option value = "American Express">American Express</option>
									<option value = "Maestro">Maestro</option>
								</select>
								<p>Credit Card Number :
									<input type="text" minlength="16" id = "ccnumber" name = "ccnumber">
								</p>
								<p>Credit Expiry Date : Month :
									<input type = "date" name = "expirydate" id  = "expirydate">
								</p>
								<p>Credit Card CVV:
									<input type="text" minlength="3" id="cccvc" name="cccvc" value="$cccvc">
								</p>
							</dd>
						</form>
					</div>
					<div style="visibility:hidden;position:relative;top:-110px;margin-top:-110px" id = "cashContainer">
						<form id = "cash">
							<dd>
								<p>You can directly pay to the vendor</p>
							</dd>
						</form>
					</div>
					<div style="visibility:hidden;position:relative;top:-110px;margin-top:-110px" id="paypalContainer">
						<form id = "paypalform">
							<label>Enter your Paypal Details</label><br><br>
							<dd>Paypal Address :
								<input type="text" id="paypal" name="paypal" value="$paypal">
							</dd>
						</form>
					</div>
		
					<div id="float_right">
        					<input type="submit" name="submit3" value="Pay Now">
    					</div>
				</div>
			</div>
		</form>
	<div id = "pos">
		<p> For Orders and Bills :</p>
		<a href = "rate1.php">CLick here</a>
	</div>
	
	
</body>
</html>
