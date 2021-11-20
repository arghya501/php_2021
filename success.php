<?php        
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true)
  {
      header("location: login.php");
      exit;
  }
?>
<?php
$final_result=$_SESSION['result'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
 <!-- link to Bootstrap minified css-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <!-- link to Jquery minified-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- link to Bootstrap JS -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <!-- link to external CSS -->
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="container">
	<div class="row text-center">
        <div class="">
        <br><br> <br> <br><br> <br> <br><br> <br> <h2 style="color:#0fad00">Success</h2>
        <h3>Dear, Student</h3>
        <p style="font-size:25px;color:#5C5C5C;"><?php echo "Your Score Is " .$final_result." out of 10."?></p>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for taking the examination,you can now Log Out from the portal</p>
        <a href="logout.php" class="btn btn-success">     Log out     </a>
    <br><br>
        </div>
        </div>
</div>
<footer>
    <div class="container">
        Copyright <span class="glyphicon glyphicon-copyright-mark"></span> iSequre(AASK).
        All Rights Reserved | Contact Us: +91 90000 00000
    </div>
</footer>
</body>
</html>