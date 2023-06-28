<?php
    session_start();
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
    }?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <title>readmore</title>
    <link rel="icon" type="image/x-icon" href="fav.png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/readmore.css">
</head>

<body>
    <?php include 'nav.php';?>
    <div class="about-section">
        <h1>About ZEAPS Bot</h1><br>
        <h2>ZEAPS Bot is a software application used to conduct an online chat conversation via text instead of
            providing direct contact with a live human agent.</h2><br>
        <strong>
            <p>The project ZEAPS bot focuses on creating a chatbot to be used by students to get their queries responded
                to easily from the college website. It is a program that can do real conversations with textual methods.
                Using Artificial Intelligence (AI), ZEAPS bots can simulate human conversations.it is chatbot based on
                AI or Machine learning algorithms these bots can answer ambiguous questions which means the user does
                not have to be specific while asking questions. Thus, these bots create replies for the user’s queries
                using Natural Language Processing (NLP). Natural language processing (NLP) refers to the branch of
                computer science and more specifically, the branch of artificial intelligence or AI concerned with
                giving computers the ability to understand the text and spoken words in much the same way human beings
                can.NLP combines computational linguistics, and rule-based modeling of human language with statistical,
                machine learning, and deep learning models. Together, these technologies enable computers to process
                human language in the form of text and to understand its full meaning, complete with the speaker or
                writer’s intent and sentiment.</p>
        </strong>
    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row d-flex justify-content-center">
        <div class="column">
            <div class="card">
                <img src="img/pic/pb.jpg" alt="Prawal Bhujel" style="width:100%">
                <div class="container">
                    <h2>Prawal Bhujel </h2>
                    <p class="title">BCA</p>
                    <p>Inspiria knowledge campus (2020-2023)</p>
                    <p>prawal.b.0220@inspiria.edu.in</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="img/pic/es.jpg" alt="Elvis Shrestha" style="width:100%">
                <div class="container">
                    <h2>Elvis Shrestha</h2>
                    <p class="title">BCA</p>
                    <p>Inspiria knowledge campus (2020-2023)</p>
                    <p>elvis.s.0220@inspiria.edu.in</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="img/pic/zg.jpg" alt="Zigimi Ghishing" style="width:100%">
                <div class="container">
                    <h2>Zigmi Ghishing</h2>
                    <p class="title">BCA</p>
                    <p>Inspiria knowledge campus (2020-2023)</p>
                    <p>zigmi.g.0220@inspiria.edu.in</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="column">
            <div class="card">
                <img src="img/pic/ss.jpg" alt="Sangayla Sangden" style="width:100%">
                <div class="container">
                    <h2>Sangayla Sangden</h2>
                    <p class="title">BCA</p>
                    <p>Inspiria knowledge campus (2020-2023)</p>
                    <p>sangayla.s.0220@inspiria.edu.in</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="img/pic/at.jpg" alt="Aryan Thapa" style="width:100%">
                <div class="container">
                    <h2>Aryan Thapa</h2>
                    <p class="title">BCA</p>
                    <p>Inspiria knowledge campus (2020-2023)</p>
                    <p>aryan.t.0220@inspiria.edu.in</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>


        <div class="column">
            <div class="card">
                <img src="img/pic/sj.jpg" alt="John">
                <div class="container">
                    <h2>Shreyashi Jana</h2>
                    <p class="title">BCA</p>
                    <p>Inspiria knowledge campus (2020-2023)</p>
                    <p>shreyashi.j.0220@inspiria.edu.in</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
    </div>

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
  <div class="text-center p-4 cont" style="background-color: rgba(0, 0, 0, 0.025);">
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
        color:white;
    }
</style>