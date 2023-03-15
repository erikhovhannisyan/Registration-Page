<?php
include './db.php';
session_start();
$log = $_POST['UserName'];
$pass = $_POST['Password'];

$select = "SELECT * FROM `users` WHERE `UserName` = '$log'" ;

$result = mysqli_query($con, $select);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       if (password_verify($pass, $row['Password'])){
        $q =  $row['UserName'];
       }
    }
    echo "<h1 id='yes'>$q</h1> ";
} else {
    echo "<h1 id='yes'></h1> ";
}