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
    
    <title>Exam Overview</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    
    

    <div class="instructions">
    <ul>
        <li>This exam consists of 10 Multiple Choice Questions</li>
        <li>You are expected to answer all the questions</li>
        <li>Total time of the exam is 20 minutes</li>
        <li>Click on the start button to begin the test.Once you start you can't restart the exam.</li>
        </ul>
    </div>
        <div id="banner-image">
			<div class="container">
				<div id="banner_content">
					<a href="exam1.php">
       <div class="btn1">
                        <button class="btn btn-danger btn-lg active">Start</button>
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