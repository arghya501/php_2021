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
  <script type = "text/javascript" >  
      
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };

</script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    
    <title>exampage5</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php
$right_answer1 = "3";
$radioval = "false";
if(isset($_POST['button']))
{
  
  
  if(!empty($_POST['radio']))
  {
    $radioval = $_POST['radio'];
    //echo "$radioval";

           if($right_answer1 == $radioval){
             $_SESSION['result']++;
             //echo $_SESSION['result'];
             header("location: exam6.php");
           }
           else{
             //$_SESSION['result'];
             //echo "ans not same ";
             //echo $_SESSION['result'];
             header("location: exam6.php");
           }
           
  }
  else{
    echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Hey!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
}
?>

    <div class="question1">
    <form action="" method="post" class="mb-1">
<fieldset id="question1">
<p style="font-size: 24px"> Q.5</p>
<legend> ___________ are dedicated computers that hold the actual databases and run only DBMS and related Software.</legend>
        <label><input type=  "radio" name="radio" value="1"> Main Server</label> <br> 
          <label><input type="radio" name="radio" value="2"> Web server</label> <br>
          <label><input type="radio" name="radio" value="3"> Database Server</label> <br> 
          <label><input type="radio" name="radio" value="4"> Non Database Server</label>  
      
        </div>
        
        <div id="banner_content">
        <a href="exam6.php"></a>
         <div class="btn2">
         <button class="btn btn-danger btn-lg active" name="button">Next</button>
         </form>
         </div>
          
         <footer>
            <div class="container">
                Copyright <span class="glyphicon glyphicon-copyright-mark"></span> iSecure(AASK).
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

    
    

    

    

                                                                     
         
         
        