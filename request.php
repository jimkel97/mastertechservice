<?php
require_once("contact/global/api/API.class.php");
$api = new FormTools\API();
$fields = $api->initFormPage("2", "initialize");
$params = array(
    "submit_button" => "submit",
    "next_page" => "request_success.php",
    "form_data" => $_POST,
    "finalize" => true
);
$api->processFormSubmission($params);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Commercial Kitchen Hood Repair, Walk In Coolers Repair, Commercial Air Conditioning Repair - Master-Tech
        Service, LLC</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Rokkitt|Source+Sans+Pro|Homemade+Apple&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Commercial Kitchen Hood Repair, Walk In Coolers Repair, Commercial Air Conditioning Repair" />
    <meta name="description" content="Master-Tech Service is your one-stop solution to solve your emergency commercial kitchen hood repair needs.  We also specialize in walk in coolers repair and commercial air conditioning repair." />
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.htm">Home</a>
        <a href="index.htm#box2">Commercial Kitchen Hood Repair</a>
        <a href="index.htm#box3">Walk In Coolers Repair</a>
        <a href="index.htm#box5">Commercial Air Conditioning Repair</a>
        <a href="#gary">About Gary's Master-Tech</a>
        <a href="#resume">Resume</a>
        <a href="#mission">Mission</a>
        <a href="#benevolence">Benevolence</a>
        <a href="contact.htm">Contact</a>
    </div>
    <div style="display: flex; justify-content: space-around">
        <div><span class="burger" style="font-size:30px;cursor:pointer" onclick="openNav()">&nbsp;&#9776;</span></div>
        <div><a href="index.htm"><img src="images/logo.png" alt="logo"></a></div>
        <div class="links-header mx-auto">
            <nav class="navbar navbar-expand-sm bg-clear navbar-light" id="primary_nav_wrap">
                <!-- Links -->
                <ul class="navbar-nav">

                    <!-- Dropdown -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.htm">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.htm" id="navbardropi" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.htm#box2">Commercial Kitchen Hood Repair</a>
                            <a class="dropdown-item" href="index.htm#box3">Walk In Coolers Repair</a>
                            <a class="dropdown-item" href="index.htm#box5">Commercial Air Conditioning Repair</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="about.htm" id="navbardropa" data-toggle="dropdown">
                            About Us
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="about.htm#gary">About Gary's Master-Tech</a>
                            <a class="dropdown-item" href="about.htm#resume">Resume</a>
                            <a class="dropdown-item" href="about.htm#mission">Mission</a>
                            <a class="dropdown-item" href="about.htm#benevolence">Benevolence</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="header grid-header">
        <div class="text-header hcenter">
            <p class="red size28">EMERGENCY RESTAURANT HOOD SYSTEM REPAIR</p>
        </div>
    </div>
    <h1 class="hcenter">Request Service</h1>
    <br>
        <form method="POST" class="side-padding">
            <input type="hidden" name="form_tools_initialize_form" value="1" />
            <input type="hidden" name="form_tools_form_id" value="1" />
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="cname">Company Name:</label><br>
            </div>
            <div class="col-4">
                <input type="text" id="cname" name="cname"><br>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="siteaddress">Work Site Street Address:</label><br>
            </div>
            <div class="col-4">
                <input type="text" id="siteaddress" name="siteaddress"><br>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="city">City:</label><br>
            </div>
            <div class="col-4">
                <input type="text" id="city" name="city"><br>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="state">State:</label><br>
            </div>
            <div class="col-4">
                <input type="text" id="state" name="state"><br>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="zip">ZIP Code:</label><br>
            </div>
            <div class="col-4">
                <input type="text" id="zip" name="zip"><br>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="fname">First Name:</label><br>
            </div>
            <div class="col-4">
                <input type="text" id="fname" name="fname"><br>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="lname">Last Name:</label><br>
            </div>
            <div class="col-4">
                <input type="text" id="lname" name="lname"><br>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="phone">Phone Number:</label><br>
            </div>
            <div class="col-4">
                <input type="text" id="phone" name="phone"><br>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="email">Email Address:</label><br>
            </div>
            <div class="col-4">
                <input type="text" id="email" name="email"><br>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="description">Description of Problem:</label><br>
            </div>
            <div class="col-4">
                <textarea id="description" name="description" rows="4" cols="50"></textarea><br>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="instructions">Special Instructions:</label><br>
            </div>
            <div class="col-4">
                <input type="text" id="instructions" name="instructions"><br>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="priority">Priority Level:</label>
            </div>
            <div class="col-4">
                <select id="priority" name="priority">
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                </select>
            </div>
        </div>
        <div class="text-center">
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>
    <div class="footer grid-footer">
        <div class="text-footer">
            <!--<p>footer text goes here</p>-->
            <p><a href="tel:+14077747714" class="phonenum">407-774-7714</a></p>
        </div>
        <div class="image-footer hcenter">
            <div class="slightbig">
                <p class="rokkitt"><span class="logoletterbig">M</span><span class="logolettersmall">ASTER</span><span class="red"><span class="logolettersmall">-TEC</span><span class="logoletterbig">H</span></span></p>
                <p class="logoletterservice">SERVICE</p>
                <p class="logoletterurl">www.MasterTechService.com</p>
            </div>
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="js/scripts.js"></script>
</body>

</html>