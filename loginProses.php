<?php
    include "koneksi.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = isset($_POST['username']) ? $_POST['username'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";
    }

    $query = "SELECT * FROM admin WHERE username='$username' and password='$password'";
    $result = mysqli_query($koneksi, $query);
    $cek = mysqli_num_rows($result);

    if ($cek) {
        
        header("location:index.php");
    
    }else{
        
        header("location:login.php");
        
        echo mysqli_error($koneksi); 
    }

    ?>
    