<?php

$alert=false;
$error=false;
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        
        include 'partials/_dbconnect.php';
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $cpassword=$_POST["cpassword"];
        //$exists=false;
        
        // Check whether this username exists
        $existSql = "SELECT * FROM jerry WHERE email = '$email'";
        $result = mysqli_query($conn,$existSql);
        $rn = mysqli_num_rows($result);
            if($rn> 0)
            {
                // $exists = true;
                $error = "Email-ID Already Exists";
            }

            else
            {
                if($password==$cpassword)
                {
                    $sql="INSERT INTO jerry (`name`, `email`, `password`, `time`) VALUES ('$name', '$email', '$password', current_timestamp())";
                    $result= mysqli_query($conn,$sql);
                    if($result)
                    {
                        $alert=true;
                    }
                }
                else
                {
                    $error="password do not match";
                }
            }

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

    <title>SignUp</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>

    <?php
    if($alert)
    {
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> Your account is now created and you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

    if($error)
    {
        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Opps</strong> '.$error.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    
    ?>
    
    <div class="container my-4">
    <h1 class="text-center">Signup To Our Website</h1>
    <form action="/signup.php" method= "post">

        <div class="mb-3">
        <label for="name" class="form-label">Name </label>
        <input type="text" class="form-control" name="name" id="name">
        </div>
        
        <div class="mb-3">
        <label for="Email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="mb-3">
        <label for="cpassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="cpassword" id="cpassword">
        <div id="emailHelp" class="form-text">Make Sure To Type The Same Password.</div>
        </div>
        
        
        <button type="submit" class="btn btn-primary" >Signup</button>
    </form>
    </div>

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