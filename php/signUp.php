<?php
session_start();
$_SESSION['firstName']=$_POST['firstName'];
$_SESSION['middleName']=$_POST['middleName'];
$_SESSION['lastName']=$_POST['lastName'];
$_SESSION['familyName']=$_POST['familyName'];
$_SESSION['email']=$_POST['signUpEmail'];
$_SESSION['password']=$_POST['signUpPassword'];
$_SESSION['confirmPassword']=$_POST['signUpConfirmPassword'];

#Check Name
$name_regex="/^([a-zA-Z' ]+)$/";
//First Name
function checkFirstName($_SESSION['firstName']){
    if(preg_match($name_regex,$_SESSION['firstName'])){
        return true;
    }else{
        return false;
    }
}
function checkMiddleName($_SESSION['middleName']){
    if(preg_match($name_regex,$_SESSION['middleName'])){
        return true;
    }else{
        return false;
    }
}
function checkFirstName($_SESSION['firstName']){
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
} 
?>
