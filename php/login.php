<?php
session_start();
$_SESSION['loginEmail']=$_POST['loginEmail'];
$_SESSION['loginPassword']=$_POST['loginPassword'];
if ($_POST['submit']){
    if($_SESSION['loginEmail']== $_SESSION['array'['Email']]){
        echo 'correct';
     }
     else{
         echo 'Incorrect';
     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./Bootstrap-css/bootstrap.css">
</head>
<body>
    <div class="container">
        <form>
            <h1>Login</h1>
            <p>Welcome back! Login with your credentials</p>
            <label for="loginEmail">Email</label>
            <br>
            <input type="email" name="loginEmail" id="loginEmail">
            
            <label for="loginPassword">Password</label>
            <br>
            <input type="password" name="loginPassword" id="loginPassword">
            <br>
            <input type="submit" value="submit" name="submit">
            <!-- <div class="row">
                <div class="col-12" type="button">
                    <button type="submit" class="col-lg-6 btn btn-primary">Login</button>
                </div> -->
            </div>
        </form>
    </div>
</body>
</html>