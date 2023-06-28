<?php
    session_start();
    $email = $_SESSION['email'];
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
    }?>

<?php include 'partials/_dbconnect.php';?>
<?php $query = "SELECT user_name FROM accounts WHERE email='$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$username = $row['user_name'];
?>

<?php echo'
<nav class="navbar navbar-light  navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid ">
    <img src="img/navimg.png" alt="Bootstrap" width="50" height="50"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item ">
      <a class="nav-link" id="username" ><strong>Welcome  '. $username .' !</strong></a>
    </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="chat/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="suggestion.php">Suggestion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<style>
  .navbar-image{
    width:50px;
    height: 50px;}
  .navbar{
      background: #05A4DF;
    }
  #username{
    color:blue;
    }
</style>'?>