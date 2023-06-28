<?php
    session_start();
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
    }?>

<!DOCTYPE html>
<html>

<head>
    <title>About ZEAPS bot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <link rel="icon" type="image/x-icon" href="fav.png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
</head>

<body>
    <?php include 'nav.php';?>

    <div class="container">
        <div class="content-section">
            <div class="title">
                <h1>About ZEAPS </h1>
            </div>

            <div class="content">
                <h3>ZEAPS &nbsp; can &nbsp; certainly be used to &nbsp;answer your queries. As a conversational AI, It
                    is designed to understand &nbsp; natural language and &nbsp; respond to a wide range of questions
                    and requests. Whether a student is looking for information about a particular topic, needs help with
                    a specific problem, or just wants to chat about their studies, ZEAPS Bot is here to help.
                </h3><br>
                <p>It is often impossible to get all the data on a single &nbsp; interface without the
                    complications of going through multiple forms and windows.<br> The ZEAPS &nbsp; bot aims to remove
                    this &nbsp;difficulty by providing a common <br>and user-friendly &nbsp; interface to solve queries
                    of college &nbsp;students. The <br> purpose of a chatbot system is to simulate a human conversation.
                </p>
                <div class="button">
                    <a href="readmore.php">Read More</a>
                </div>
            </div>
        </div>
        <div class="image-section">
            <img src="img/about1.png">
        </div>
    </div>
    <!-- Footer -->
    <footer class=" text-center fixed-bottom" style="background-color:#05A4DF">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright:
            <a class="text-dark" href="http://localhost/phpbot/chat/">ZEAPS.com</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>