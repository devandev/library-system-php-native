<?php

$ns = "localhost";
$un = "root";
$pw = "";
$db = "db_perpus";

$conn = mysqli_connect($ns,$un,$pw,$db);

if(!$conn){
    echo "Tidak dapat terhubung ke server";
}