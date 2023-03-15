<?php include './db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $Name = $_POST['Name'];
    $SurName = $_POST['Surname'];
    $UserName = $_POST['UserName'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Gender = $_POST['Gender'];
    if($Gender==""){
        $Gender="Other";
    }

    $Password = password_hash($Password, PASSWORD_DEFAULT);

    if (!$con) {
        die('Could not connect:  ' . mysqli_error($con));
    }

    $sql = "INSERT INTO `users`( `FirstName`, `LastName`, `UserName`, `Gender`, `E-mail`, `Password`)
    VALUES ('$Name','$SurName','$UserName','$Gender','$Email','$Password')";
    $result = mysqli_query($con, $sql);
    
    echo "<h1 id='yes'>Yes</h1> ";

    mysqli_close($con);

    ?>
</body>

</html>

<?php
