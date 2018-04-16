
<?php
    include_once "W_config.php";
?>

<?php
    session_start();
    if(isset($_POST['signup'])) {
		$name = $_POST['name'];
        $username = $_POST['userName'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];
        
		$query = "insert into user(name,password,username,contact) values('$name','$password','$username','$contact');";
		$result = mysqli_query($connect, $query);
		header("location:main.php");		
	}


    
	if(isset($_POST['signin'])) {
        $uname = $_POST['uname'];
        $upassword = $_POST['upassword'];
        if ($uname == "pawan" and $upassword == "pawan") {
                header("location:W_vehicle.php");
        }
        else {
		    $query = "select * from user where username = '$uname' && password = '$upassword';";
		    $result = mysqli_query($connect, $query);
		    $count = mysqli_num_rows($result);
		    if($count == true) {
			    $_SESSION['uname'] = $uname;
			    $_SESSION['logintime'] = time();
			    header("location:W_userlogin.php");	
            }
            else {
                echo "<script>alert('invalid')</script>";
                header("location:main.php");
		    }
        }
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script type="text/javascript" src="../WST/js/jquery.js"></script>
    <script type="text/javascript">
        function checkname() {
            var name = document.getElementById("userName").value;

            if (name) {
                $.ajax({
                    type: 'post',
                    url: '../WST/check/checkdata.php',
                    data: {
                        user_name: name,
                    },
                    success: function(response) {
                        $('#name_status').html(response);
                        if (response == "User Name Available") {
                            return true;
                        } else {
                            return false;
                        }
                    }
                });
            } else {
                $('#name_status').html("");
                return false;
            }
        }

        function checkcontact() {
            var contact = document.getElementById("contact").value;

            if (contact) {
                $.ajax({
                    type: 'post',
                    url: '../WST/check/checkdata.php',
                    data: {
                        contact: contact,
                    },
                    success: function(response) {
                        $('#contact_status').html(response);
                        if (response == "Contact Available") {
                            return true;
                        } else {
                            return false;
                        }
                    }
                });
            } else {
                $('#contact_status').html("");
                return false;
            }
        }

        function checkall() {
            var namehtml = document.getElementById("name_status").innerHTML;
            var contacthtml = document.getElementById("contact_status").innerHTML;

            if ((namehtml == "User Name Available" && contacthtml == "Contact Available")) {
                return true;

            } else {
                window.alert("Please select the correct Username or Contact")
                return false;
            }
        }
    </script>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
	<style>
	</style>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"  href="#myPage">BOOK A TRUCK</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">About</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="#contact">Contacts</a></li>
        <a>You are logged in</a>
        <li><button  onclick="window.location.href='W_userlogin.php'" style="width:auto;">Get In Touch</button></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>BOOK A TRUCK</h1> 
  <p>Door Step Delivery</p> 
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About BOOK A TRUCK</h2><br>
      <p style="margin-bottom:20px;text-align:justify;"><span style="font-size: larger;">BOOK A TRUCK is a unified marketplace which connects load owners, truck/fleet owners, transport intermediaries, transport companies, packers and movers and others for efficient movement of goods. With a state-of-the-art web and mobile platform, and a fast growing user base, BOOK A TRUCK is making Transportation of goods social, time-saving and convenient by providing numerous options to choose from.</span></p>
      <p style="margin-bottom:20px;text-align:justify;"><span style="font-size: larger;">BOOK A TRUCK intends to organise the sector of transportation of goods by bringing the consignors and transporters together for exchange of available loads and trucks and providing the flexibility to select any available load or truck. The transporters are verified and our two way rating &amp; review system ensures users reliability and trustworthiness.</span></p>  <br>
      <button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong>We aim to deliver quality service at competitive price and back up every shipment with latest technology & outstanding customer service.We at BOOK A TRUCK try to support our customers for their customized requirements which are not feasible for a local transporter.</h4><br>
      <p><strong>VISION:</strong> We are proud to say that our modernistic way of truck hiring service & fleet solutions bestow the way people used to hire transport solutions and our mobile enabled technology seamlessly communicates with our immense network of truck operators to bring in a responsive value stream. Our partner operators are verified and trained to deliver a reliable & trustworthy service to achieve a higher customer satisfaction. BOOK A TRUCK is tugged in a revolutionary way by a group of technology fanatics & logistics experts having wealth of experience and a thorough knowledge of this unique platform and strive hard to serve the freight market in an efficient way. Now no more haggle or wrangle for transporting your goods and we would like say that it's time to "Truck it Easy" with BOOK A TRUCK</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div id="faq" class="container-fluid ">
    <div class="row">
        <div class="col-sm-8">
<h2>FAQ</h2>
<button class="question">1. What is BOOK A TRUCK?</button>
<div class="answer">
  <p>BOOK A TRUCK is a unified marketplace which connects load owners, truck/fleet owners, transport in-termediaries, transport companies, packers and movers and others for exchange of available loads and trucks and provides the flexibility to select any available load or truck.</p>
</div>

<button class="question">2. How Does BOOK A TRUCK Work?</button>
<div class="answer">
  <p>BOOK A TRUCK is a two-way working platform.Consignors / Transporters posts a load / truck at the portal and gets instant matches as per the available trucks / loads already posted by other Consignors / Transporters. Consignor also has the option to contact transporters available as per the load details in surrounding areas.</p>
</div>

<button class="question">3. Who can Post a Load/Truck? </button>
<div class="answer">
  <p><b>Load</b>: Any Person or Entity that has a load of material to be delivered from one place to another. The Person or Entity can be the Owner of the Load or can be an Associate to the Owner of the Load.
<b>Truck</b>: Transporters like Transport Company or Agency, Truck Owner, Fleet Owner, Truck Brokers, Packers & Movers, Business Owner that has a Truck available for movement from one place to another</p>
</div>

<button class="question">4. Why do I need to signup, and is it Free? </button>
<div class="answer">
  <p>You do not need to sign-up as a user in order to search for a Truck/Load. When you find a Load/Truck that you are interested in and you want to contact the other user, you will then need to join BOOK A TRUCK (only registered users can contact other users).
It is completely free, quick and easy to join BOOK A TRUCK for a Consignor. However, to register as a Transporter, some detailed information is required.</p>
</div>

<button class="question">5. How do Pricing and Payment work?</button>
<div class="answer">
  <p>Prices may/may not be negotiable and are offered by Transporters when they post a available truck or accept a available load. BOOK A TRUCK allow only verified and registered Transporters on its portal which ensures the prices are competitive.
Terms of Payments is decided between the Consignor and Transporter as per their mutual agree-ment. BOOK A TRUCK is not involved in any payment transaction.</p>
</div>

<button class="question">6. Does BOOK A TRUCK provide guarantee accuracy, timelines, safety and completeness of the transaction?</button>
<div class="answer">
  <p>BOOK A TRUCK is a unified marketplace connecting different types of goods transporters and consignors to carry a transaction as per mutually agreed terms & conditions. We do not guarantee accuracy, timelines, safety and completeness of the transaction. However, it is our endeavour to bring only the verified and trusted users on our portal.</p>
</div>

</div>
</div>
</div>

<script>
var acc = document.getElementsByClassName("question");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var answer = this.nextElementSibling;
    if (answer.style.maxHeight){
      answer.style.maxHeight = null;
    } else {
      answer.style.maxHeight = answer.scrollHeight + "px";
    } 
  });
}
</script>


<!-- Container (Pricing Section) -->
<form name="form1" method="post" action="W_comment.php">
        <div id="contact" class="container-fluid bg-grey">
            <h2 class="text-center">CONTACT</h2>
            <div class="row">
                <div class="col-sm-5">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> Pune</p>
                    <p><span class="glyphicon glyphicon-phone"></span>+91 9075592263</p>
                    <p><span class="glyphicon glyphicon-phone"></span>+91 8237397699</p>
                    <p><span class="glyphicon glyphicon-envelope"></span>pawanhage123@gmail.com</p>
                    <p><span class="glyphicon glyphicon-envelope"></span>gathashutosh76@gmail.com</p>

                </div>
                <div class="col-sm-7 slideanim">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="username" name="username" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="5"></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-right" name="submit" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!-- Add Google Maps -->

     <div id="googleMap" style="height:400px;width:100%;"></div>
    <script>
        function myMap() {
            var myCenter = new google.maps.LatLng(18.5204, 73.8567);
            var mapProp = {
                center: myCenter,
                zoom: 12,
                scrollwheel: false,
                draggable: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var marker = new google.maps.Marker({
                position: myCenter
            });
            marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5UQObku61O2NXIaG6DOMUmF65ft8GZPs&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
