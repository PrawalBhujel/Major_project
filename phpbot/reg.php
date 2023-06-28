<?php 
 $showAlert=false;
 $showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'partials/_dbconnect.php';
    $username=$_POST["username"];
    $email= $_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $password_regex = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/";
    if (!preg_match($password_regex, $password)) {
        $showError="Password must be at least 8 characters long and contain at least 
        one uppercase letter, one lowercase letter, one number, and one special character.";;
    }
    else{
    $existSql="SELECT * FROM `accounts` WHERE `email`='$email'";
    $result=mysqli_query($con,$existSql);
    $numExistRows=mysqli_num_rows($result);
    if($numExistRows>0){
       $showError="user already exist";
        }
    else{
        if($password==$cpassword){
        $hash=password_hash($password,PASSWORD_DEFAULT);
        $sql="INSERT INTO `accounts` (`user_name`, `password`, `email`, `dt`) VALUES ('$username', '$hash', '$email',current_timestamp());";
        $result=mysqli_query($con,$sql);
        if($result){
            $showAlert=true;
             }}
        else{
             $showError="Password do not Match ";
             }
        }
    }
}
?>
<!--------HTMl------->

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
    <title>Sign up for ZEAPS bot</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    
</head>

<body>
    <!-- HTML -->

    <div class="form signup" id="reg">
        <div class="form-content">

            <!--php-->
            <?php
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!&nbsp</strong>Your account is now created and you can login
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
    
   <!----->
            <header><img src="img/navimg.png" alt="Bootstrap" width="50" height="50" />Sign up
                <img src="img/navimg.png" alt="Bootstrap" width="50" height="50" />
            </header>

            <form  action="/phpbot/reg.php" method="post">
                <div class="field input-field">
                    <input type="text"  class="form-control" name="username" placeholder="Enter your Name" required></input>
                </div>

                <div class="field input-field">
                    <input type="email" class="form-control" name="email" placeholder="Enter your Email" required></input>
                </div>

                <div class="field input-field">
                    <input id="password-field" type="password" class="form-control" name="password" value="secret" placeholder="Enter your Password" required>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>

                <div class="field input-field">
                    <input type="password" class="form-control" name="cpassword" placeholder="Confirm your Password" required>
                    
                </div>

                <div class="field button-field">
                    <button type="submit">Sign up</button>
                </div>

                <div class="form-link">
                    <span>Already have an account? <a href="login.php" class="signup-link">Login</a></span>
                </div>

            </form>
        </div>
        <div class="line"></div>
    </div>

    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <style>
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}
    </style>

</body>

</html>