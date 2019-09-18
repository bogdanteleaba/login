<!DOCTYPE html>
<?php



if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user=="bogdan" && $pass=="admin"){
        echo("Wow. Your were right!");
    }else{
        echo("Try again bro..");
    }
}
?>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

<div class="container">
    <form action="" method="post">
        <label>USERNAME</label>
        <input type="text" name="username" placeholder="Enter the username.. what are you waiting for?">

        <label>PASSWORD</label>
        <input type="password" name="password" placeholder="Show me your secret!">

        <input type="submit" name="submit" value="SUBMIT">
    </form>
</div>

