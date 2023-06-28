<?php 
 $showError=false;
 $login=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'partials/_dbconnect.php';
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql="select * from accounts where email='$email'";
     $result=mysqli_query($con,$sql);
     $num=mysqli_num_rows($result);
     if($num==1){
        while($row=mysqli_fetch_assoc($result)){
           if(password_verify($password,$row['password'])){
              $login=true;
              session_start();
              $_SESSION['loggedin']=true;
              $_SESSION['email']=$email;
              header("location:chat/");
            }
            else{
                $showError="invalid Password";
                }
        }     }
     
    else{
        $showError="invalid email";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--reg.css-->
    <link rel="stylesheet" href="css/style.css">

    <title>Log in to ZEAPS bot </title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
</head>

<div class="form login" id="loginform">
    <div class="form-content">

        <!--php-->
        <?php
    if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success! &nbsp</strong>You are login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </div>';}

        if($showError){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed! &nbsp</strong>'.$showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </div>';

        }
    ?>
        <!--html-->
        <header><img src="img/navimg.png" alt="Bootstrap" width="50" height="50" />Log in
            <img src="img/navimg.png" alt="Bootstrap" width="50" height="50" />
        </header>
        <form action="/phpbot/login.php" method="post">
            <div class="field input-field">
                <input type="email" class="form-control" name="email" placeholder="Enter your email" required></input>
            </div>

            <div class="field input-field">
                <input type="password" class="form-control" name="password" placeholder="Enter your Password"
                    required></input>
            </div>

            <div class="field button-field">
                <button>Log in</button>
            </div>

            <div class="form-link">
                <span>Dont have an account? <a href="reg.php" class="signup-link">Signup</a></span>
            </div>

        </form>
        <div class="line"></div>
    </div>
   
    
   
</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>

</html>