<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo&family=Markazi+Text&family=Mirza&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="styles/animate.min.css">
    <link rel="stylesheet" href="icons/font-awsome/FA5.8/fontawesome-free-5.12.1-web/css/all.css">
    <link rel="stylesheet" href="icons/font-awsome/FA4.7/css/font-awesome.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="Apps/jQuery.js"></script>
    <script src="Apps/Top.js"></script>
</head>
<body>

<nav class="Top">
    <ul class="menu">
        <li><a href="<?php echo HomeDir; ?>">خانه</a></li>
        <?php session_start()?>
        <?php if(isset($_SESSION['LoggedIn']) && !empty($_SESSION['LoggedIn']) && isset($_SESSION['userData']) && !empty($_SESSION['userData']) && $_SESSION['LoggedIn'] == 1): ?>
            <li><a href="<?php echo HomeDir; ?>/panel">پنل کاربری</a></li>
        <?php else: ?>
            <li><a href="<?php echo HomeDir; ?>/Login">ورود به صفحه کاربری</a></li>
        <?php endif;?>
        <?php session_abort(); ?>
        <li><a href="register">ثبت نام</a></li>
        <li><a href="">امتحانات</a></li>
    </ul>
</nav>

<main>
