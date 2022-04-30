<?php
session_start();
echo "<p>Welcome ". $_SESSION['email'] ."your name is: ".$_SESSION['firstName']." ".$_SESSION['middleName']." ".$_SESSION['lastName']." ".$_SESSION['familyName']. " And your number is ". $_SESSION['phoneNumber']."</p>";
?>
