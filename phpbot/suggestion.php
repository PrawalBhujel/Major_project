<?php
    session_start();
    $email = $_SESSION['email'];
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
    }?>
<!--php for submittion suggestion-->
<?php 
 $showError=false;
 $showAlert=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'partials/_dbconnect.php';
    $suggestion=$_POST["suggestion"];
    $title=$_POST["title"];
    $sql="INSERT INTO `suggestion`(`email`, `suggestion`, `dt`,`title`) 
    VALUES ('$email', '$suggestion', current_timestamp(),'$title');";
     $result=mysqli_query($con,$sql);
     if($result){
        $showAlert="Thank You for Suggestion.";
     }
    else{
        $showError="Submition failed!";
       }
     }
?>
<!---------->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>ZEAPS bot</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'nav.php';
    ?>
    <!--php-->
    <?php
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!&nbsp</strong>'.$showAlert.'
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span></button>
        </div>';}

        if($showError){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!&nbsp</strong>'.$showError.'
        <button type="button" class="close " data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span></button>
        </div>'; }
    ?>

    <center>
        <div class="image-section">
            <img id="img" src="img/faf.png">
            <img id="img1" src="img/navimg.png">
            <img id="img" src="img/af.png">
        </div>
    </center>


    <div class="card">
        <div class="card-header text-center">
            <h1>Suggestion Box</h1>
        </div>
        <div class="card-body m-4">
            <h5 class="card-title p-6 m-3 "><strong>Enter your Suggestion.</strong> <img src="img/comment.png"
                    alt="Bootstrap" width="90" height="50" /></h5>
            <form action="/phpbot/suggestion.php " method="post">
                <div class="form-floating m-3 ">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="title" name="title" id="floatingTextarea"
                            required></textarea>
                    </div><br>
                    <textarea class="form-control" name="suggestion" placeholder="Leave your suggestion here ..."
                        required id="floatingTextarea2" style="height: 100px"></textarea>
                    <div class="d-grid gap-2  m-5 text-center mx-auto">
                        <button class="btn  btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <!--- content-->




    <!--------->
    <style>
    html,
    body {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    .card-body {
        background-color: #0089A3;
    }

    @media only screen and (max-width: 970px) {
        #img {
            display: none;
        }
        #img1{
            width: 150px;
        }
    }
    
    </style>

    <!-- ---------------------------------------------------------------------------------------------------------- -->
 
 <!-- Footer -->
<footer class="text-center text-lg-start text-muted footer"><br>

<!-- Section: Links  -->
<section class="cont">
  <div class="container text-center text-md-start mt-5">
    <!-- Grid row -->
    <div class="row mt-3">
      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">
          Useful links
        </h6>
        <p>
          <a href="chat/index.php" class="text-reset">Home</a>
        </p>
        <p>
          <a href="about.php" class="text-reset">about</a>
        </p>
        <p>
          <a href="suggestion.php" class="text-reset">suggestion</a>
        </p>
        <p>
          <a href="#!" class="text-reset">Help</a>
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
        <p><i class="fas fa-home me-3 text-secondary"></i> Siliguri,India</p>
        <p>
          <i class="fas fa-envelope me-3 text-secondary"></i>
          zeapsbot@gmail.com
        </p>
        <p><i class="fas fa-phone me-3 text-secondary"></i> + 91 234 567 88</p>
        <p><i class="fas fa-print me-3 text-secondary"></i> + 91 234 567 89</p>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4 copy" style="background-color: rgba(0, 0, 0, 0.025);">
  © 2023 Copyright:
  <a class="text-reset fw-bold" href="http://localhost/phpbot/chat/">ZEAPS.com</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
            integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
            integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
        </script>

</body>

</html>
<style>
    .footer{
    background-color: #474e5d;}
    .cont{
        color:white;}
        .cont {
}

        .copy{
            color:white;
            background-color: black;

        }
</style>