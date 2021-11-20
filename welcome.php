<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true)
{
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    
    <title>Welcome</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    
    <h1>Welcome to iSecure</h1>
    <h4>Please go throug the basic Instructions before proceeding further.</h4>

    <div class="instructions">
    <p style="font-size:160%;">Basic Instructions</p>
    <ul>
        <li>Switch off your mobile phones before starting the examination</li>
        <li>In case you are appeaaring the exam from your mobile phone,close all the other tabs</li>
        <li>During the examination,if you face any technical difficulties,kindly close the exam portal and refresh.You will resume the exam from the last attempted question</li>
        <li>If any student founsd using mal-practices during the examination,he/she will be debarred from the examination and their canditure will be deemed canceled</li>
        </ul>
    </div>

    <div id="banner-image">
			<div class="container">
				<div id="banner_content">
					<a href="instruction.php">
       <div class="btn1">
                        <button class="btn btn-danger btn-lg active">Next</button>
                        </div>
                        </div>
    <footer>
        <div class="container">
            Copyright <span class="glyphicon glyphicon-copyright-mark"></span> SETGOI(AASK).
            All Rights Reserved | Contact Us: +91 90000 00000
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>