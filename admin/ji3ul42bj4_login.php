<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: ej03xu3.php");
    exit; //記得要跳出來，不然會重複轉址過多次
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>登入介面</title>
    <style>
        /* * {
            outline: 1px solid black;
        } */

        body {
            background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
        }

        #id_center {
            display: none;
        }

        #pass_center {
            display: none;
        }

        .id_input {
            width: 44%;
        }

        .pass_input {
            width: 44%;
        }

        @media (max-width: 575.99px) {
            #id_right {
                display: none;
            }

            #id_center {
                display: block;
            }

            #pass_right {
                display: none;
            }

            #pass_center {
                display: block;
            }

            .id_input {
                width: 90%;
            }

            .pass_input {
                width: 90%;
            }
        }
    </style>


</head>

<body>
    <nav class="navbar navbar-light " style="background-color: #004767;">
        <a class="navbar-brand " href="#">
            <img src="../img/logo1.png" width="100px" height="75px" class="" alt="">
            <span class="text-white ml-3">後臺管理</span>
        </a>
    </nav>

    <h1 class="text-center mt-5 text-white">Log In</h1>

    <div class="container-sm pr-5 pl-5 pb-5 pt-3">
        <form method="post" action="3f8he8_gologin.php">
            <div class="form-group row">
                <label for="inputEmail3" id="id_right" class="col-sm-4 col-form-label text-right text-white">帳號</label>
                <label for="inputEmail3" id="id_center"
                    class="col-sm-4 col-form-label text-center text-white">帳號</label>
                <div class="col-sm-8">
                    <input type="text" name="username" class="form-control ml-4 mb-2 id_input" id="inputEmail3">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" id="pass_right"
                    class="col-sm-4 col-form-label text-right text-white">密碼</label>
                <label for="inputPassword3" id="pass_center"
                    class="col-sm-4 col-form-label text-center text-white">密碼</label>
                <div class="col-sm-8">
                    <input type="password" name="password" class="form-control ml-4 mt-2 mb-2 pass_input"
                        id="inputPassword3">
                </div>
            </div>

            <div class="form-group row">
                <div class="mx-auto mt-2" style="width: 75px;">
                    <button type="submit" class="btn btn-primary" style="background-color: #02DF82;">Sign in</button>
                </div>
            </div>
            <div class="text-center">
                <a href="ji3fm45j4hk4_register.html" style="color:#ffff;">還沒有帳號？現在就註冊！</a>
            </div>
        </form>
    </div>

    <!-- <form method="post" action="3f8he8_gologin.php">
        帳號：
        <input type="text" name="username"><br /><br />
        密碼：
        <input type="password" name="password"><br><br>
        <input type="submit" value="登入" name="submit"><br><br>
        <a href="ji3fm45j4hk4_register.html">還沒有帳號？現在就註冊！</a>
    </form> -->
</body>

</html>