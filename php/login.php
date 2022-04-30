<?php
session_start();


echo $_SESSION['email'];
if (isset($_POST['submit'])){
    
    $_SESSION['loginEmail']=$_POST['loginEmail'];
    $_SESSION['loginPassword']=$_POST['loginPassword'];

    foreach ($_SESSION['array'] as $key => $value) {
        //Check Email
        if($key == 'Email'){
            if($_SESSION['loginEmail']==$value){
                $loginEmail_result="<span style=' color:green'>Correct Email</span>";
                $loginEmail_correct=true;
            }else{
                $loginEmail_result="<span style=' color:red'>Incorrect Email</span>";
                $loginEmail_correct=false;
            }
        }
        //Check Password
        if($key == 'Password Confirmation'){
            if($_SESSION['loginPassword']==$value){
                $loginPassword_result="<span style=' color:green'>Correct Password</span>";
                $loginPassword_correct=true;
            }else{
                $loginPassword_result="<span style=' color:red'>Incorrect Password</span>";
                $loginPassword_correct=false;
            }
        }
    }
    if($loginEmail_correct && $loginPassword_correct)
        header('location:welcome.php');
    else
    echo '<script language="javascript">';
    echo 'alert("Incorrect Information")';  //not showing an alert box.
    echo '</script>';
  
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
        <form method="post">
            <h1>Login</h1>
            <p>Welcome back! Login with your credentials</p>
            <label for="loginEmail">Email</label>
            <br>
            <input type="email" name="loginEmail" id="loginEmail">
            <?php if(isset($loginEmail_result)){echo $loginEmail_result;}?>
            <br>
            
            <label for="loginPassword">Password</label>
            <br>
            <input type="password" name="loginPassword" id="loginPassword">
            <?php if(isset($loginPassword_result)){echo $loginPassword_result;}?>
            
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