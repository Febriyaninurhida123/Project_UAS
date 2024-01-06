<?php
session_start();
$title ='Home';
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Febriyani Nurhida</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body style="margin-top: 30px; background-image: url('bg.jpg'); background-size: cover;">
<h1 style="color: #6699CC; text-align: center; text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5);">SELAMAT DATANG DI APLIKASI CHECKLIST</h1>
    <div class="container" style="width: 70%; padding: 20px;">
        <ul class="list-group">
            <li class="list-group-item active text-center" aria-current="true" style="background-color: rgba(135, 206, 235, 0.2); font-size: 28px;">Menu</li>
            <li class="list-group-item text-center" style="background-color:rgba(135, 206, 235, 0.2); font-size: 30px;border-color: BLUE"><a style="color: #FFFFFF;" href="toilet.php">Checklist Toilet</a></li>
            <li class="list-group-item text-center" style="background-color:rgba(135, 206, 235, 0.2); font-size: 30px;border-color: BLUE;"><a style="color: #FFFFFF;" href="ind_toilet.php">Data Toilet</a></li>
        </ul>
    </div>
    <div class="d-grid gap-2 container" style="width:10%;">
        <button class="btn" type="button" style="background-color: #89CFF0"><a style="color: #FFFFFF" href="login.php">Logout</a></button>
    </div>
</body>
</html>