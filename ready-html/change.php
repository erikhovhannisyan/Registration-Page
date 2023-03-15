<?php
include './db.php';
$olduser = $_POST['olduser'];

$userchange = $_POST['userchange'];
if ($userchange == true) {
    $UserName = $_POST['UserName'];
    $update = "UPDATE `users` SET `UserName`='$UserName' WHERE `UserName` = '$olduser'";
    mysqli_query($con, $update);

    echo $UserName;
}


$firstchange = $_POST['firstchange'];
if ($firstchange == true) {
    $FirstName = $_POST['FirstName'];
    $update = "UPDATE `users` SET `FirstName`='$FirstName' WHERE `UserName` = '$olduser'";
    mysqli_query($con, $update);

    echo $FirstName;
}


$lastchange = $_POST['lastchange'];
if ($lastchange == true) {
    $LastName = $_POST['LastName'];
    $update = "UPDATE `users` SET `LastName`='$LastName' WHERE `UserName` = '$olduser'";
    mysqli_query($con, $update);

    echo $LastName;
}

$mailchange = $_POST['mailchange'];
if ($mailchange == true) {
    $mail = $_POST['Email'];
    $update = "UPDATE `users` SET `E-mail`='$mail' WHERE `UserName` = '$olduser'";
    mysqli_query($con, $update);

    echo $mail;
}


if ($_POST['Gender']) {
    $gen = $_POST['Gender'];
    $update = "UPDATE `users` SET `Gender`='$gen' WHERE `UserName` = '$olduser'";
    mysqli_query($con, $update);

    echo $gen;
}


if (@$_POST['Password']) {
    $pass = $_POST['Password'];
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $update = "UPDATE `users` SET `Password`='$pass' WHERE `UserName` = '$olduser'";
    mysqli_query($con, $update);

    echo $pass;
}