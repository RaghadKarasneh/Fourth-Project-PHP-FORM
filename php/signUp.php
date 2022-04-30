<?php
session_start();

$name_regex="/^([a-zA-Z' ]+)$/";
$email_regex="/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/";
$password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/"; 
$phoneNumber_regex="/^\\(?([0-9]{3})\\)?[-.\\s]?([0-9]{3})[-.\\s]?([0-9]{4})?[-.\\s]?([0-9]{4})$/";

if (isset($_POST['submit'])){
$_SESSION['firstName']=$_POST['firstName'];
$_SESSION['middleName']=$_POST['middleName'];
$_SESSION['lastName']=$_POST['lastName'];
$_SESSION['familyName']=$_POST['familyName'];
$_SESSION['email']=$_POST['signUpEmail'];
$_SESSION['password']=$_POST['signUpPassword'];
$_SESSION['confirmPassword']=$_POST['signUpConfirmPassword'];
$_SESSION['phoneNumber']=$_POST['phoneNumber'];
$_SESSION['dateOfBirth']=$_POST['DOB'];
    // First name check
    if(preg_match($name_regex,$_SESSION['firstName'])){
        $firstName_result="<span style=' color:green'>Correct Name</span>";
        $firstName_correct=true;
    }else{
        $firstName_result="<span style=' color:red'>InCorrect Name</span>";
        $firstName_correct=false;
    }
    //Middle name check
    if(preg_match($name_regex,$_SESSION['middleName'])){
        $middleName_result="<span style=' color:green'>Correct Name</span>";
        $middleName_correct=true;
    }else{
        $middleName_result="<span style=' color:red'>InCorrect Name</span>";
        $middleName_correct=false;
    }
       //Middle name check
       if(preg_match($name_regex,$_SESSION['lastName'])){
        $lastName_result="<span style=' color:green'>Correct Name</span>";
        $lastName_correct=true;
    }else{
        $lastName_result="<span style=' color:red'>InCorrect Name</span>";
        $lastName_correct=false;
    }
    //Family Name
    if(preg_match($name_regex,$_SESSION['familyName'])){
        $familyName_result="<span style=' color:green'>Correct Name</span>";
        $familyName_correct=true;
    }else{
        $familyName_result="<span style=' color:red'>InCorrect Name</span>";
        $familyName_correct=false;
    }
    //Email
    if(preg_match($email_regex,$_SESSION['email'])){
        $email_result="<span style=' color:green'>Correct Email</span>";
    }
    else{
        $email_result="<span style=' color:red'>Incorrect Email</span>";
    }
    //Password
    if(preg_match($password_regex,$_SESSION['password'])){
        $password_result="<span style=' color:green'>Correct Password</span>";
        $password_correct=true;
    }
    else{
        $password_result="<span style=' color:red'>Incorrect Password, your password shoud have: 8 charactersat least, At least one uppercase English letter, At least one lowercase English letter, At least one digit, At least one special character </span>";
        $paswword_correct=false;
    }
    //Confirm Password
    if(preg_match($password_regex,$_SESSION['confirmPassword'])){
        $confirmPassword_result="<span style=' color:green'>Correct Password</span>";
        $confirmPassword_correct=true;
    }
    else{
        $confirmPassword_result="<span style=' color:red'>Incorrect Password, your password shoud have: 8 charactersat least, At least one uppercase English letter, At least one lowercase English letter, At least one digit, At least one special character </span>";
        $confirmPaswword_correct=false;
    }
    //Phone
    if(preg_match($phoneNumber_regex,$_SESSION['phoneNumber'])){
        $phoneNumber_result="<span style=' color:green'>Correct Phone Number</span>";
        $confirmPhone_correct=true;
    }
    else{
        $phoneNumber_result="<span style=' color:red'>Incorrect Phone Number";
        $confirmPhone_correct=false;
    }
    //Date Of Birth
    if((floor((time() - strtotime($_SESSION['dateOfBirth'])) / 31556926)) >16){
        $dob_result="<span style=' color:green'>greater than 16</span>";
        $confirmDob_correct=true;
    }
    
    else{
        $dob_result="<span style=' color:red'>less than 16</span>";
        $confirmDob_correct=false;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="./Bootstrap-css/bootstrap.css">
</head>
<body>
    <div class="container">
        <form method="post">
            <h1>Sign Up</h1>
            <p>Creat an account. It's free!</p>
            <!--Full Name field-->
            <label for="fName">First Name</label>
            <input type="text" name="firstName" id="fName" >
            <?php if(isset($firstName_result)){echo $firstName_result;}?>
            <label for="mName">Middle Name</label>
            <input type="text" name="middleName" id="mName" >
            <?php if(isset($middleName_result)){echo $middleName_result;}?>
            <br>
            <label for="lName">Last Name</label>
            <input type="text" name="lastName" id="lName" >
            <?php if(isset($lastName_result)){echo $lastName_result;}?>
            <label for="fName">Family Name</label>
            <input type="text" name="familyName" id="fName" >
            <?php if(isset($familyName_result)){echo $familyName_result;}?>
            <br>
            <!--Email Number-->
            <label for="signUpEmail">Email</label>
            <br>
            <input type="email" name="signUpEmail" id="signUpEmail" required>
            <?php if(isset($email_result)){echo $email_result;}?>
            
            <br>
            <!--Password-->
            <label for="loginPassword">Password</label>
            <br>
            <input type="password" name="signUpPassword" id="signUpPassword" >
            <?php if(isset($password_result)){echo $password_result;}?>
            <br>
            <!--Confirm Password-->
            <label for="signUpConfirmPassword">Confirm Password</label>
            <br>
            <input type="password" name="signUpConfirmPassword" id="signUpConfirmPassword" >
            <?php if(isset($confirmPassword_result)){echo $confirmPassword_result;}?>
            <br>
            <!--Phone Number-->
            <label for="phoneNumber">Phone Number</label>
            <br>
            <input type="number" name="phoneNumber" id="phoneNumber">
            <?php if(isset($phoneNumber_result)){echo $phoneNumber_result;}?>
            <br>
            <!--Date Of Birth-->
            <label for="DOB">Date Of Birth</label>
            <br>
            <input type="date" name="DOB" id="DOB">
            <?php if(isset($dob_result)){echo $dob_result;}?>
            <br>
            <input type="submit" value="submit" name="submit">
           <!-- <div class="row">
                <div class="col-12" type="button">
                    <button type="submit" class="col-lg-6 btn btn-danger">Sign Up</button>
                </div>
            </div>
         Check Name
/*$name_regex="/^([a-zA-Z' ]+)$/";
//First Name
function checkFirstName(){
    if(preg_match($name_regex,$_SESSION['firstName'])){
        return true;
    }else{
        return false;
    }
}/*
function checkMiddleName(){
    if(preg_match($name_regex,$_SESSION['middleName'])){
        return true;
    }else{
        return false;
    }
}
function checkFirstName(){
    if(preg_match($name_regex,$_SESSION['firstName'])){
        return true;
    }else{
        return false;
    }
}
//Middle Name
if(preg_match($name_regex,$_SESSION['middleName'])){
    echo 'Valid name given.';
}else{
    echo 'Invalid name given.';
}
//Last Name
if(preg_match($name_regex,$_SESSION['lastName'])){
    echo 'Valid name given.';
}else{
    echo 'Invalid name given.';
}
//Family Name
if(preg_match($name_regex,$_SESSION['familyName'])){
    echo 'Valid name given.';
}else{
    echo 'Invalid name given.';
}
#Check the email:

$email_regex="/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/";
 if (!preg_match($email_regex,$_SESSION['email'])) {
    echo 'You are allowed to use';
}
else{
    echo 'Not valid email';
} */-->
        </form>
    </div>
</body>
</html>