<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="/TEEG/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/TEEG/Public/css/site.css" rel="stylesheet">
    <link href="/TEEG/Public/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="template-login">

<header class="container">
    <a class="" href="#">
        <img src="http://placehold.it/150x50&text=Logo" alt="">
    </a>
</header>

<!-- Page Content -->
<div class="main-login-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="main-login__title">Welcome to<br>teeg!</h1>
            </div>
            <div class="login-box col-lg-4">
                <div class="row login-options">
                    <div class="login__option col-md-6 active" data-login-option="1"><a href="#">Login</a></div>
                    <div class="login__option col-md-6" data-login-option="2"><a href="#">Register</a></div>
                </div>

                <form method="POST" action="/TEEG/index.php/Home/index/do_login" class="login__form" data-login-form="1">
                    <div class="form-group">
                        <label for="InputEmail">Email address</label>
                        <input type="email" class="form-control" id="InputEmail" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="pw">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember username?
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Login</button>
                </form>

                <form method="POST" action="/TEEG/index.php/Home/index/do_register" class="register__form hide" data-login-form="2">
                    <div class="form-group">
                        <label for="InputEmail">Enter email address</label>
                        <input type="email" class="form-control" id="InputEmail" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="pw">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Repeat password</label>
                        <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="cpw">
                    </div>
                    <button type="submit" class="btn btn-default">Register</button>
                </form>

            </div>
        </div>
    </div>
    <!-- /.container -->
</div>

<footer>

</footer>

<!-- jQuery -->
<script src="/TEEG/Public/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/TEEG/Public/js/bootstrap.min.js"></script>

<script src="/TEEG/Public/js/main.js"></script>

</body>

</html>