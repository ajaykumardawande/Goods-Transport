<?php
	include_once "W_config.php";
	if(isset($_POST['signup'])) {
		$name = $_POST['name'];
        $sname = $_POST['sname'];
        $spassword = $_POST['spassword'];
        $contact = $_POST['contact'];
        
		$query = "insert into user(name,password,username,contact) values('$name','$sname','$spassword','$contact');";
		$result = mysqli_query($connect, $query);
		header("location:W_login.php");		
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<style>
body {font-family: Arial, Helvetica, sans-serif;}

        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }
        
        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }
        
        .jumbotron {
            background-color: #f4511e;
            color: #fff;
            padding: 100px 25px;
            font-family: Montserrat, sans-serif;
        }
        
        .container-fluid {
            padding: 60px 50px;
        }
        
        .bg-grey {
            background-color: #f6f6f6;
        }
        
        .logo-small {
            color: #f4511e;
            font-size: 50px;
        }
        
        .logo {
            color: #f4511e;
            font-size: 200px;
        }
        
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        
        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }
        
        .carousel-control.right,
        .carousel-control.left {
            background-image: none;
            color: #f4511e;
        }
        
        .carousel-indicators li {
            border-color: #f4511e;
        }
        
        .carousel-indicators li.active {
            background-color: #f4511e;
        }
        
        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }
        
        .item span {
            font-style: normal;
        }
        
        .panel {
            border: 1px solid #f4511e;
            border-radius: 0 !important;
            transition: box-shadow 0.5s;
        }
        
        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
        }
        
        .panel-footer .btn:hover {
            border: 1px solid #f4511e;
            background-color: #fff !important;
            color: #f4511e;
        }
        
        .panel-heading {
            color: #fff !important;
            background-color: #f4511e !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        
        .panel-footer {
            background-color: white !important;
        }
        
        .panel-footer h3 {
            font-size: 32px;
        }
        
        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }
        
        .panel-footer .btn {
            margin: 15px 0;
            background-color: #f4511e;
            color: #fff;
        }
        
        .navbar {
            margin-bottom: 0;
            background-color: #f4511e;
            z-index: 0;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }
        
        .navbar li a,
        .navbar .navbar-brand {
            color: #fff !important;
        }
        
        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            color: #f4511e !important;
            background-color: #fff !important;
        }
        
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }
        
        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #f4511e;
        }
        
        .slideanim {
            visibility: hidden;
        }
        
        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }
        

        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }
        
        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        
        @media screen  {
            .col-sm-4 {
                max-width: 768px
                text-align: center;
                margin: 25px 0;
            }
            .btn-lg {
                max-width: 768px
                width: 100%;
                margin-bottom: 35px;
            }
        }
        
        @media screen {
            .logo {
                max-width: 480px
                font-size: 150px;
            }
        }



/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen {
    span.psw {
       max-width: 300px;
       display: block;
       float: none;
    }
    .cancelbtn {
       max-width: 300px;
       width: 100%;
    }
}
</style>
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
    <li><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SignUp</button></li>
	
    </ul>
  </div>
</nav>
  
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="W_confirm.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="upassword" required>
        
      <button type = "submit"  name = "signin" value = "SignIn">Submit</button>
	  <label>
        <input type="checkbox" checked="checked" name="remcheckbox"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<div id="id02" class="modal">
  
  <form class="modal-content animate" action="W_login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">

      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>

      <label for="sname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="sname" required>

      <label for="spassword"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="spassword" required>
      
      <label for = "contact"><b>Contact</b></label>
	  <input type = "number"  name = "contact"  placeholder = "Phone No" maxlength = "10" required>
					
      <button type = "submit" name = "signup" value = "Signup">SignUp</button>   
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

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


    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2>About Company Page</h2><br>
                <p style="margin-bottom:20px;text-align:justify;"><span style="font-size: larger;">BOOKATRUCK is a unified marketplace which connects load owners, truck/fleet owners, transport intermediaries, transport companies, packers and movers and others for efficient movement of goods. With a state-of-the-art web and mobile platform, and a fast growing user base, BOOKATRUCK is making Transportation of goods social, time-saving and convenient by providing numerous options to choose from.</span></p>
                <p style="margin-bottom:20px;text-align:justify;"><span style="font-size: larger;">BOOKATRUCK intends to organise the sector of transportation of goods by bringing the consignors and transporters together for exchange of available loads and trucks and providing the flexibility to select any available load or truck. The transporters are verified and our two way rating &amp; review system ensures users reliability and trustworthiness.</span></p>   
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-signal logo"></span>
            </div>
        </div>
    </div>
    <h2>&emsp;&emsp;What our customers say</h2>
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

    <!-- Container (Contact Section) -->
    <form name="form1" method="post" action="comment.php">
        <div id="contact" class="container-fluid bg-grey">
            <h2 class="text-center">CONTACT</h2>
            <div class="row">
                <div class="col-sm-5">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> Pune</p>
                    <p><span class="glyphicon glyphicon-phone"></span>+91 8237397699</p>
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
<script>
        $(document).ready(function() {
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
                    }, 900, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function() {
                $(".slideanim").each(function() {
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

