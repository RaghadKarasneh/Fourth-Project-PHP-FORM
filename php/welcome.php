<?php
session_start();
echo "<p>Welcome ". $_SESSION['email'] ."your name is: ".$_SESSION['firstName']." ".$_SESSION['middleName']." ".$_SESSION['lastName']." ".$_SESSION['familyName']. " And your number is ". $_SESSION['phoneNumber']."</p>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Bootstrap-css/bootstrap.css">
</head>
<body>
<h1 class="text-center"> Welcome <?php echo $_SESSION['firstName']; ?> To Our Home Page ! <h1>
    <h3 class="text-center"> Your Email is <?php echo $_SESSION['email']; ?> </h3>
</body>
</html>