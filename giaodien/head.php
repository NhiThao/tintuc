<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trang chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-weight: 300;
        }

        body ::-webkit-input-placeholder {
            /* WebKit browsers */
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            font-weight: 300;
        }
        body :-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            opacity: 1;
            font-weight: 300;
        }
        body ::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            opacity: 1;
            font-weight: 300;
        }
        body :-ms-input-placeholder {
            /* Internet Explorer 10+ */
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            font-weight: 300;
        }
        .dropdown-menu {
            background: #3482d0;
            background: -webkit-linear-gradient(top left, #3366FF 0%, #3399FF 100%);
            background: linear-gradient(to bottom right, #3482d0 0%, #3399FF 100%);
            top: 50%;
            left: 0;
            width: 250px;
            height: 300px;
            margin-top: -100px;
            margin-left: 100px;
        }

        form {
            padding: 20px 0;
            position: relative;
            z-index: 2;
        }

        form input.login {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: 0;
            border: 1px solid rgba(255, 255, 255, 0.4);
            background-color: rgba(255, 255, 255, 0.2);
            width: 150px;
            border-radius: 3px;
            padding: 10px 15px;
            margin: 0 auto 10px auto;
            display: block;
            text-align: center;
            font-size: 18px;
            color: white;
            -webkit-transition-duration: 0.25s;
            transition-duration: 0.25s;
            font-weight: 300;
        }
        form input.login:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }
        form input.login:focus {
            background-color: white;
            width: 200px;
            color: #53e3a6;
        }
        form button#login-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: 0;
            background-color: white;
            border: 0;
            padding: 10px 25px;
            color: #53e3a6;
            border-radius: 3px;
            width: 150px;
            cursor: pointer;
            font-size: 18px;
            -webkit-transition-duration: 0.25s;
            transition-duration: 0.25s;
        }
        form button#login-button:hover {
            background-color: #f5f7f9;
        }
        form a{
            color:lightskyblue;
        }
        form a:focus{
            color:#12a0bf;
        }
        .bg-bubbles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .bg-bubbles li {
            position: absolute;
            list-style: none;
            display: block;

            height: 40px;
            background-color: rgba(255, 255, 255, 0.15);
            bottom: -160px;
            -webkit-animation: square 25s infinite;
            animation: square 25s infinite;
            -webkit-transition-timing-function: linear;
            transition-timing-function: linear;
        }
        .bg-bubbles li:nth-child(1) {
            left: 10%;
        }
        .bg-bubbles li:nth-child(2) {
            left: 20%;
            width: 80px;
            height: 80px;
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
            -webkit-animation-duration: 17s;
            animation-duration: 17s;
        }
        .bg-bubbles li:nth-child(3) {
            left: 25%;
            -webkit-animation-delay: 4s;
            animation-delay: 4s;
        }
        .bg-bubbles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            -webkit-animation-duration: 22s;
            animation-duration: 22s;
            background-color: rgba(255, 255, 255, 0.25);
        }
        .bg-bubbles li:nth-child(5) {
            left: 70%;
        }
        .bg-bubbles li:nth-child(6) {
            left: 80%;
            width: 120px;
            height: 120px;
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            background-color: rgba(255, 255, 255, 0.2);
        }
        .bg-bubbles li:nth-child(7) {
            left: 32%;
            width: 160px;
            height: 160px;
            -webkit-animation-delay: 7s;
            animation-delay: 7s;
        }
        .bg-bubbles li:nth-child(8) {
            left: 55%;
            width: 20px;
            height: 20px;
            -webkit-animation-delay: 15s;
            animation-delay: 15s;
            -webkit-animation-duration: 40s;
            animation-duration: 40s;
        }
        .bg-bubbles li:nth-child(9) {
            left: 25%;
            width: 10px;
            height: 10px;
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
            -webkit-animation-duration: 40s;
            animation-duration: 40s;
            background-color: rgba(255, 255, 255, 0.3);
        }
        .bg-bubbles li:nth-child(10) {
            left: 90%;
            width: 160px;
            height: 160px;
            -webkit-animation-delay: 11s;
            animation-delay: 11s;
        }
        @-webkit-keyframes square {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            100% {
                -webkit-transform: translateY(-700px) rotate(600deg);
                transform: translateY(-700px) rotate(600deg);
            }
        }
        @keyframes square {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            100% {
                -webkit-transform: translateY(-700px) rotate(600deg);
                transform: translateY(-700px) rotate(600deg);
            }
        }

        a{

        }
        .navbar-inverse {
            background-color: #3482d0;
            border:none;
            border-radius: 0;
        }
        .navbar-inverse .navbar-nav>li>a {
            color: white;
        }
        form.form-horizontal{
            width: 200px;
        }
        input.form-control{

        }


    </style>
    <script>
        $("#login-button").click(function(event){
            event.preventDefault();

            $('form').fadeOut(100);
            $('.wrapper').addClass('form-success');
        });
    </script>
</head>
<body>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>

        <ul class="nav navbar-nav">

            <li ><a href="../user/index.php">Trang chu</a></li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="">Gioi thieu
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Page 1-1</a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li>
                </ul>
            </li>

            <li><a href="../user/tintuc.php">Tin tuc</a></li>
            <li><a href="#">Page 2</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Gop y</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="">Login
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../user/hocsinh.php">Hoc sinh</a></li>
                    <li><a href="#">Giao vien</a></li>
                    <li><a href="../admin/index.php">Admin</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
<div class="container">


