
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
      <a class="navbar-brand" >Book A Truck</a>
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
  </div>
</nav>

    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h4><button style="width:auto;" onclick="window.location.href='W_add_v.php'">Maintain The Vehicle's Database</button></h4><br>
                <p><h4>Administrator can make changes to vehicles database update it add new data<h4>.</p></h4>
                <h4><button style="width:auto;" onclick="window.location.href='W_add_d.php'">Maintain The Driver's Database</h4></button>
               <p><h4>Orders placed to the website can be viewed and further porcessing decision can be undertake</h4></p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-signal logo"></span>
            </div>
        </div>
    </div>


 

</body>

</html>

