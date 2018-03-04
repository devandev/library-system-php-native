<?php
if(isset($_POST['btn_login'])){
    session_start();
    include_once ("connect.php");
    $id = $_POST["username"];
    $password = $_POST["password"];
    $jabatan = $_POST["jabatan"];

    if($jabatan == "anggota"){
        $sql = "SELECT * FROM tb_anggota WHERE nama_anggota = '$id' AND password_anggota = '$password'";
        $result = mysqli_query($conn,$sql);
        //var_dump($result);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['ya'] = true;
            $_SESSION['id'] = $id;
            $_SESSION['password'] = $password;
            header("location:../view/anggota/anggota_home.php");
        }else{
            $_SESSION['tidak'] = false;
            $_SESSION['id'] = "";
            $_SESSION['password'] = "";
            header("location:../index.php");
        }
    }else if($jabatan == "admin"){
        $sql = "SELECT * FROM tb_admin WHERE nama_admin = '$id' AND password_admin = '$password'";
        $result = mysqli_query($conn,$sql);
        //var_dump($result);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['ya'] = true;
            $_SESSION['id'] = $id;
            $_SESSION['password'] = $password;
            header("location:../view/admin/admin_home.php");
        }else{
            $_SESSION['tidak'] = false;
            $_SESSION['id'] = "";
            $_SESSION['password'] = "";
            header("location:../index.php");
        }
    }else{
        echo "error";
    }
    
}
?>