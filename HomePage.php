<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("location: login.php"); exit();
}

if(isset($_GET['logout']))
{
    unset($_SESSION['user']);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomePageSyles.css">
    <title>HomePage</title>
</head>
<body>
    <a style="font-family: Poppins; color: gray; margin-left: 5px; margin-right: 10px;" href ="?logout"> Log out</a>
    <div class="dropdown">
        <button class="buttonStyle">Menu</button>
        <div class="content">
            <a href="cvPage.html">CV page</a>
            <a href="Album.html">Album</a>
            <a href="contactUs.html">Contact Me</a>
        </div>
    </div>
    <div class="column">
        <div class="maincontainer">
            <h1 class="Title"> Welcome to my website, </h1>
        </div>
        <h1 style="color: #000;font-family: Poppins;font-size: 80px; font-style: normal;font-weight: 700; animation: fadeIn 1s ease-in-out forwards; margin-top: 0px;"><?php echo $_SESSION['user']; ?></h1>
        <img src="handwave.png" class="imageShade">
    </div>
</body>
</html>
