<?php include './db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../icons/css/all.css">
</head>

<body>


    <!-- -------------------------------------------------------REG----------------------------------------------------------------- -->

    <div class="login_form_container">
        <div class="login_form">
            <h2>Sign UP</h2>
            <div class="input_group">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="Name" class="input_text" id="Name" autocomplete="off" />
                <i class="fa-sharp fa-solid fa-xmark" style="display: none;" id="name"></i>
            </div>
            <div class="input_group">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="SurName" class="input_text" id="SurName" autocomplete="off" />
                <i class="fa-sharp fa-solid fa-xmark" style="display: none;" id="surname"></i>

            </div>
            <div class="input_group">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="UserName" class="input_text" id="UserName" autocomplete="off" />
                <i class="fa-sharp fa-solid fa-xmark" style="display: none;" id="username"></i>

            </div>
            <div class="input_group">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="E-mail" class="input_text" id="E-mail" autocomplete="off" />
                <i class="fa-sharp fa-solid fa-xmark" style="display: none;" id="email"></i>

            </div>
            <div class="input_group">
                <i class="fa fa-unlock-alt"></i>
                <input type="password" placeholder="Password" class="input_text" id="Password" autocomplete="off" />
                <i class="fa-sharp fa-solid fa-xmark" style="display: none;" id="password"></i>

            </div>
            <div class="input_group">
                <i class="fa fa-unlock-alt"></i>
                <input type="password" placeholder="Repeat Password" class="input_text" id="RPassword" autocomplete="off" />
                <i class="fa-sharp fa-solid fa-xmark " style="display: none;" id="rpassword"></i>

            </div>
            <div class="input-group">
                <div class="flex">
                    <input type="radio" value="Male" onclick="gender(value)" name="gender">Male
                    <input type="radio" value="Female" onclick="gender(value)" name="gender">Female
                    <input type="radio" value="Other" onclick="gender(value)" name="gender" checked>Other
                    <i class="fa-sharp fa-solid fa-xmark" style="display: none;"></i>

                </div>
            </div>

            <div class="button_group" id="login_button">
                <a>Submit</a>
            </div>
            <div class="fotter">
                <a style="opacity: 0;">Forgot Password ?</a>
                <a onclick="login()">Log In</a>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------/REG------------------------------------------------------------------- -->



    <!-- -------------------------------------------------------LOGIN------------------------------------------------------------------- -->
    <div class="login_form_container1" style="display: none;">
        <div class="login_form">
            <h2>Login</h2>
            <div class="input_group">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="Username" id="login" class="input_text" autocomplete="off" />
                <i class="fa-sharp fa-solid fa-xmark" style="display: none;" id="log"></i>
            </div>
            <div class="input_group">
                <i class="fa fa-unlock-alt"></i>
                <input type="password" placeholder="Password" id="pass" class="input_text" autocomplete="off" />
                <i class="fa-sharp fa-solid fa-xmark" style="display: none;" id="pas"></i>
            </div>
            <div class="button_group" id="login_button1">
                <a>Login</a>
            </div>
            <div class="fotter">
                <a>Forgot Password ?</a>
                <a onclick="signin()">SingUp</a>
            </div>
        </div>
    </div>

    <div id="state"></div>
    <!-- -------------------------------------------------------/LOGIN------------------------------------------------------------------- -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
        let full = 0;
        let Gender;
        let log;

        function login() {
            $('.login_form_container').css({
                'display': 'none'
            })
            $('.login_form_container1').css({
                'display': 'block'
            })
        }

        function signin() {
            $('.login_form_container').css({
                'display': 'block'
            })
            $('.login_form_container1').css({
                'display': 'none'
            })
        }


        function gender(value) {
            Gender = value;
        }
        if (Gender != "") {
            var gen = Gender;
        }

        function validateEmail(email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test(email);
        }


        $('#login_button').on('click', function() {

            let Name = $('#Name').val();
            let Surname = $('#SurName').val();
            let UserName = $('#UserName').val();
            let Email = $('#E-mail').val();
            let Password = $('#Password').val();
            let RPassword = $('#RPassword').val();
            let x1 = false;
            let x2 = false;
            let x3 = false;
            let x4 = false;
            let x5 = false;

            if (Name.match('^[a-zA-Z]{3,16}$')) {
                x1 = true
            } else {
                $('#name').css({
                    'display': 'block'
                })
                if (Name == "") {
                    document.getElementById('Name').placeholder = "Name cannot be empty";
                } else {
                    document.getElementById('Name').value = "";
                    document.getElementById('Name').placeholder = "Name cannot be  numbers";
                }
            }
            if (UserName == "") {
                document.getElementById('UserName').placeholder = "UserName cannot be empty";
                $('#username').css({
                    'display': 'block'
                })
            }
            if (Surname.match('^[a-zA-Z]{3,16}$')) {
                x2 = true;
            } else {
                $('#surname').css({
                    'display': 'block'
                })
                if (Surname == "") {
                    document.getElementById('SurName').placeholder = "SurName cannot be empty";
                } else {
                    document.getElementById('SurName').value = "";
                    document.getElementById('SurName').placeholder = "SurName cannot be have numbers";
                }
            }


            if (Email == "") {
                $('#email').css({
                    'display': 'block'
                })
                document.getElementById('E-mail').placeholder = "E-mail cannot be empty";
            } else {
                if (validateEmail(Email)) {
                    x3 = true;
                } else {
                    $('#email').css({
                        'display': 'block'
                    })
                    document.getElementById('E-mail').value = "";
                    document.getElementById('E-mail').placeholder = "E-mail is uncorrect ";
                }

            }
            if (Password.length > 6) {
                x4 = true;
                if (Password == RPassword) {
                    x5 = true;
                } else {
                    $('#rpassword').css({
                        'display': 'block'
                    })
                    document.getElementById('RPassword').value = "";
                    document.getElementById('RPassword').placeholder = "RPassword doesn't same";
                }
            } else {
                $('#password').css({
                    'display': 'block'
                })
                if (Password == "") {
                    document.getElementById('Password').placeholder = "Password cannot be empty";
                } else {
                    document.getElementById('Password').value = "";
                    document.getElementById('Password').placeholder = "Password length min 6 symbols";
                }
            }

            if (x1 == true && x2 == true && x3 == true && x4 == true && x5 == true) {
                $.ajax({
                    type: 'Post',
                    url: 'reg.php',
                    data: {
                        Name: Name,
                        Surname: Surname,
                        UserName: UserName,
                        Email: Email,
                        Password: Password,
                        Gender: Gender
                    },
                    success: function(res) {
                        document.getElementById('state').innerHTML = res;
                        if ($('#yes').text() == "Yes") {
                            $('#yes').css({
                                'display': 'none'
                            })
                            $('.login_form_container').css({
                                'display': 'none'
                            })
                            $('.login_form_container1').css({
                                'display': 'block'
                            })
                        } else {
                            alert("Error...")
                        }
                    }
                });
            }
        })



        $('#login_button1').on('click', function() {
            let a = 0;
            let UserName = $('#login').val();
            let Password = $('#pass').val();

            if (UserName == "" || Password == "" || Password.length < 6) {
                $('#log').css({
                    'display': 'block'
                })
                $('#pas').css({
                    'display': 'block'
                })
            } else {
                $.ajax({
                    type: 'post',
                    url: 'welcome.php',
                    data: {
                        UserName: UserName,
                        Password: Password,
                    },
                    success: function(res) {
                        document.getElementById('state').innerHTML = res;
                        if ($('#yes').text() != "") {
                            $('#yes').css({
                                'display': 'none'
                            })
                            $('.login_form_container').css({
                                'display': 'none'
                            })
                            $('.login_form_container1').css({
                                'display': 'none'
                            })
                            $('#wrap').css({
                                'display': 'block'
                            })
                            log = $('#state').text();
                            window.location = 'paralax.php?user=' + log;
                        } else {
                            document.getElementById('login').value = "";
                            document.getElementById('login').placeholder = "Login or Password was wrong!";
                            $('#log').css({
                                'display': 'block'
                            })
                            $('#pass').css({
                                'display': 'block'
                            })
                        }
                    }
                });
            }


        })
    </script>

</body>

</html>