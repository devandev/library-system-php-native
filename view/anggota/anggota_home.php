<?php
    session_start();
    if($_SESSION["id"] == ""){
        header("location:../../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page Anggota</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>hallo member</h1>
    <div class="btn-logout">
        <a href="../../proccess/logout.php">logout</a>
    </div>

    <script src="../../js/jquery-3.1.1.js"></script>
    <script src="../../js/script.js"></script>    
</body>
</html>


