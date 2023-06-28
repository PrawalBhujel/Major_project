<?php
    session_start();
    $email = $_SESSION['email'];
    $email = $_SESSION['email'];
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
    }?>

<?php include '../partials/_dbconnect.php';?>
<?php $query = "SELECT user_name FROM accounts WHERE email='$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$username = $row['user_name'];
?>

<?php echo '
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<style>
* {
    margin: 0;
    padding: 0;
}

body {
    padding: 0;
    margin: 0;
    height: 100vh;
}

.navbar-image {
    width: 50px;
    height: 50px;
}

.navbar {
    background: #05A4DF;
}

::-webkit-scrollbar {
    width: 0;
}

.fadeanimation {
    animation-name: fade;
    animation-duration: 1s;
}
#username{
    color:blue;
    }
.botbg {
    background-color: #0089A3;
}

body {
    background-color: "#e6ffee"
}
</style>

<head>
    <meta charset="UTF-8">
    <title>ZEAPS ChatBot</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../img/favicon/site.webmanifest">
</head>

<body>

    <!-- nav -->
    <nav class="navbar navbar-light navbar-expand-lg ">
        <div class="container-fluid ">
            <img src="../img/navimg.png" alt="Bootstrap" width="50" height="50" />

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" id="username"><strong>Welcome '. $username .' !</strong></a>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../suggestion.php">Suggestion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- end nav -->
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="container-fluid m-0 p-0 row">
            <div class="botbg col-lg-3 shadow-lg rounded-4 border col-md-7 col-sm-11 col-11 p-0 mx-auto my-auto">
                <div class="w-100 text-center mx-auto justify-content-center">
                    <svg id="svglogo" width="100px" class="mx-auto text-light m-0 p-0" height="100px"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5ZM3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.58 26.58 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.933.933 0 0 1-.765.935c-.845.147-2.34.346-4.235.346-1.895 0-3.39-.2-4.235-.346A.933.933 0 0 1 3 9.219V8.062Zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a24.767 24.767 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25.286 25.286 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135Z" />
                        <path
                            d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2V1.866ZM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5Z" />
                    </svg>
                    <div id="loadmsg" style="display: none;" class=" text-light text-center small">I am Zeaps, How can I
                        help you?</div>

                </div>
                <div class="container-fluid m-0 p-0">
                    <div class="text-center text-light ">
                        <div>
                            <h5 class="fw-semibold p-2">ZEAPS Chatbot
                                <hr>
                                </h4>
                        </div>
                    </div>
                    <div id="chats" style="height: 400px"
                        class="bg-light p-2 overflow-x-hidden overflow-y-scroll rounded-4 m-2">
                    </div>
                    <div class="row px-2 my-3">
                        <div class="col-lg-9 col-md-12 justify-content-center col-12 mx-auto">
                            <input type="text" class="form-control p-2" id="message" placeholder="Ask me anything..">
                        </div>
                        <div class="col-12 col-md-12 col-lg-auto my-3 my-lg-0 text-center mx-auto">
                            <button class="mx-auto btn btn-light send__button">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>

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
              <a href="index.php" class="text-reset">Home</a>
            </p>
            <p>
              <a href="../about.php" class="text-reset">about</a>
            </p>
            <p>
              <a href="../suggestion.php" class="text-reset">suggestion</a>
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
</style>'?>
