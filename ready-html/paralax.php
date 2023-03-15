<?php include './db.php';
$user = $_GET['user'];

$select = "SELECT * FROM `users` WHERE `UserName` = '$user'";

$result = mysqli_query($con, $select);



while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['FirstName'];
    $surname = $row['LastName'];
    $username = $row['UserName'];
    $email = $row['E-mail'];
    $gender = $row['Gender'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="../icons/css/all.css">
</head>

<body>
    <!-- -------------------------------------------------------USERPAGE----------------------------------------------------------------- -->

    <div class="wrapper" id="wrap">
        <div class="content">

            <header class="main-header">
                <div class="layers">
                    <div class="layer__header">
                        <div class="layers__caption">Welcome to Parallax </div>
                        <div class="layers__title">Fairy Forest</div>
                    </div>
                    <div class="layer layers__base" style="background-image: url(img/layer-base.png);"></div>
                    <div class="layer layers__middle" style="background-image: url(img/layer-middle.png);"></div>
                    <div class="layer layers__front" style="background-image: url(img/layer-front.png);"></div>
                </div>
            </header>

            <article class="main-article" style="background-image: url(img/dungeon.jpg);">
                <div class="main-article__content">
                    <h2 class="main-article__header">User Page</h2>

                    <h2>FirstName: <span id="firstspan"><?php echo $name ?></span> </h2>
                    <br>
                    <button id="cf">Change FirstName</button>
                    <br>
                    <br>
                    <input type="text" id="firstinp" class="inp" placeholder="Change F.Name">
                    <button id="firstok" class="ok">OK!</button>
                    <br>

                    <h2>LastName: <span id="lastspan"><?php echo $surname ?></h2></span>
                    <br>
                    <button id="cl">Change LastName</button>
                    <br><br>
                    <input type="text" id="lastinp" class="inp" placeholder="Change L.Name">
                    <button id="lastok" class="ok">OK! </button>
                    <br>

                    <h2>UserName: <span id="userspan"><?php echo $username ?></span></h2>
                    <br>
                    <button id="cu">Change UserName</button>
                    <br><br>
                    <input type="text" id="userinp" class="inp" placeholder="Change U.Name">
                    <button id="userok" class="ok">OK!</button>
                    <br>

                    <h2>E-mail: <span id="mailspan"><?php echo $email ?></span></h2>
                    <br>
                    <button id="chem">Change E-mail</button>
                    <br><br>
                    <input type="text" id="mailinp" class="inp" placeholder="Change E-mail">
                    <button id="mailok" class="ok">OK!</button>
                    <br>


                    <h2>Gender: <span id="genspan"><?php echo $gender ?></span> </h2>
                    <br>
                    <button id="cg">Change Gender</button>
                    <br><br>
                    <div id="gender" class="gender">
                        <input type="radio" value="Male" onclick="genderf(value)" name="gender">Male
                        <input type="radio" value="Female" onclick="genderf(value)" name="gender">Female
                        <input type="radio" value="Other" onclick="genderf(value)" name="gender">Other
                    </div>


                    <h2>Password: <?php echo '***' ?></h2>
                    <br>
                    <button id="cp">Change Password</button>
                    <br><br>
                    <input type="text" id="passwordinp" class="inpr" placeholder="Change Password">
                    <br><br>
                    <input type="text" id="rpasswordinp" class="inpr" placeholder="Repeat Password">
                    <button id="passwordok" class="okk">OK!</button>
                    <br><br><br><br>
                </div>
                <!-- <div class="copy">© WebDesign Master</div> -->
            </article>

        </div>
    </div>
    <!-- -------------------------------------------------------/USERPAGE----------------------------------------------------------------- -->




    <script src="./jquery-3.6.1.min.js"></script>
    <script src="./libs/gsap/gsap.min.js" defer></script>
    <script src="libs/gsap/ScrollTrigger.min.js" defer></script>
    <script src="libs/gsap/ScrollSmoother.min.js" defer></script>

    <script src="js/app.js" defer></script>

    <style>
        .inp {
            display: none;
            float: left;
            margin-left: 33%;
        }

        .ok {
            display: none;
            float: left;
            margin-left: 2%;
        }

        ::placeholder {
            color: red;
        }
    </style>



    <script>
        let cl = document.getElementById('cl');
        let cli = document.getElementById('lastinp');
        let clok = document.getElementById('lastok');

        let cu = document.getElementById('cu');
        let userinp = document.getElementById('userinp');
        let userok = document.getElementById('userok');

        let cf = document.getElementById('cf');
        let cfi = document.getElementById('firstinp');
        let cfok = document.getElementById('firstok');

        let cp = document.getElementById('cp');
        let cpi = document.getElementById('passwordinp');
        let crp = document.getElementById('rpasswordinp');
        let cpok = document.getElementById('passwordok');

        let cg = document.getElementById('cg');
        let gender = document.getElementById('gender');

        let chem = document.getElementById('chem');
        let mail = document.getElementById('mailinp');
        let mailok = document.getElementById('mailok')

        let h = 0;
        chem.onclick = function() {
            if (h % 2 == 0) {
                mail.style.display = 'block';
                mailok.style.display = 'block';
            } else {
                mail.style.display = 'none';
                mailok.style.display = 'none';
            }
            h++;
        }




        let c = 0;
        cf.onclick = function() {
            if (c % 2 == 0) {
                cfi.style.display = 'block';
                cfok.style.display = 'block';
            } else {
                cfi.style.display = 'none';
                cfok.style.display = 'none';
            }
            c++;
        }

        let b = 0;
        cl.onclick = function() {
            if (b % 2 == 0) {
                cli.style.display = 'block';
                clok.style.display = 'block';
            } else {
                cli.style.display = 'none';
                clok.style.display = 'none';
            }
            b++;
        }

        let a = 0;
        cu.onclick = function() {
            if (a % 2 == 0) {
                userinp.style.display = 'block';
                userok.style.display = 'block';
            } else {
                userinp.style.display = 'none';
                userok.style.display = 'none';
            }
            a++;
        }


        let z = 0;
        cp.onclick = function() {
            if (z % 2 == 0) {
                cpi.style.display = 'block';
                crp.style.display = "block";
                cpok.style.display = 'block';
            } else {
                cpi.style.display = 'none';
                crp.style.display = "none";
                cpok.style.display = 'none';
            }
            z++;
        }

        let Password = $('#passwordinp').val();
        let Rpassword = $('#rpasswordinp').val();

        cpok.onclick = function() {
            let Password = $('#passwordinp').val();
            let Rpassword = $('#rpasswordinp').val();
            if (Password.length > 6) {
                if (Password == Rpassword) {
                    let span = $('#userspan').text();
                    $.ajax({
                        type: 'Post',
                        url: 'change.php',
                        data: {
                            Password: Password,
                            olduser: span
                        },
                        success: function(res) {
                            console.log(res);
                            window.location = "index.php";
                        }

                    });

                } else {
                    document.getElementById('rpasswordinp').value = "";
                    document.getElementById('rpasswordinp').placeholder = "Password doesn't same";
                }

            } else {
                document.getElementById('passwordinp').value = "";
                document.getElementById('passwordinp').placeholder = "Password length min 6 symbols";
            }
            if (Password == "" || Rpassword == "") {
                document.getElementById('passwordinp').placeholder = "Password cannot be empty";
                document.getElementById('rpasswordinp').placeholder = "Password cannot be empty";
            }

        }


        let v = 0;
        cg.onclick = function() {
            if (v % 2 == 0) {
                gender.style.display = 'block';
            } else {
                gender.style.display = 'none';
            }
            v++;
        }

        $('#userok').on('click', function() {
            if ($('#userinp').val() != "") {
                let userinp = $('#userinp').val();

                // userinp.placeholder = "UserName cannot be empty";
                let span = $('#userspan').text();
                $.ajax({
                    type: 'Post',
                    url: 'change.php',
                    data: {
                        UserName: userinp,
                        userchange: true,
                        olduser: span
                    },
                    success: function(res) {
                        console.log(res);
                        window.location = "index.php"
                    }
                });
            }
        })
        $('#firstok').on('click', function() {
            if ($('#firstinp').val() != "") {
                let firstinp = $('#firstinp').val();

                // userinp.placeholder = "UserName cannot be empty";
                let span = $('#userspan').text(); // username
                $.ajax({
                    type: 'Post',
                    url: 'change.php',
                    data: {
                        FirstName: firstinp,
                        firstchange: true,
                        olduser: span
                    },
                    success: function(res) {
                        console.log(res);
                        document.getElementById('firstspan').innerHTML = res;
                    }
                });
            }
        })
        $('#lastok').on('click', function() {
            if ($('#lastinp').val() != "") {
                let lastinp = $('#lastinp').val();

                let span = $('#userspan').text(); // username
                $.ajax({
                    type: 'Post',
                    url: 'change.php',
                    data: {
                        LastName: lastinp,
                        lastchange: true,
                        olduser: span
                    },
                    success: function(res) {
                        console.log(res);
                        document.getElementById('lastspan').innerHTML = res;
                    }
                });
            }
        })

        function validateEmail(email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test(email);
        }

        $('#mailok').on('click', function() {
            if ($('#mailinp').val() != "" && validateEmail($('#mailinp').val())) {
                let mailinp = $('#mailinp').val();

                let span = $('#userspan').text(); // username
                $.ajax({
                    type: 'Post',
                    url: 'change.php',
                    data: {
                        Email: mailinp,
                        mailchange: true,
                        olduser: span
                    },
                    success: function(res) {
                        console.log(res);
                        document.getElementById('mailspan').innerHTML = res;
                    }
                });
            } else {
                document.getElementById('mailinp').value = "";
                document.getElementById('mailinp').placeholder = "invalid email";
            }
        })

        function genderf(value) {
            let val = value;
            let span = $('#userspan').text();
            $.ajax({
                type: 'POST',
                url: 'change.php',
                data: {
                    Gender: val,
                    olduser: span
                },
                success: function(res) {
                    console.log(res);
                    $('#genspan').html(res);
                }
            });
        }
    </script>


</body>

</html>