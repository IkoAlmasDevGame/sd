<?php 
require_once("../../database/koneksi.php");
session_start();
if(isset($_POST["submit"])){
    $userEmail = htmlspecialchars($_POST["userEmail"]);
    $password = htmlspecialchars($_POST["password"]);
    password_verify($password, PASSWORD_DEFAULT);

    if($userEmail == "" || $password == ""){
        header("location:index.php");
        exit(0);
    }
    $table = "s_pengguna";
    $sql = "SELECT * FROM $table WHERE email='$userEmail' and password='$password' || username='$userEmail' and password='$password'";
    $row = $conn->query($sql);
    $cek = mysqli_num_rows($row);

    if($cek > 0){
        $respondTable["s_pengguna"] = array($userEmail, $password);
        if($db = $row->fetch_assoc()){
            if($db["user_level"] == "admin"){
                $_SESSION["id_pengguna"] = $db["id"];
                $_SESSION["email_pengguna"] = $db["email"];
                $_SESSION["nama_pengguna"] = $db["nama"];
                $_SESSION["username"] = $db["username"];
                $_SESSION["user_level"] = "admin";
                header("location:dashboard/index.php");
            }else if($db["user_level"] == "guru"){
                $_SESSION["id_pengguna"] = $db["id"];
                $_SESSION["email_pengguna"] = $db["email"];
                $_SESSION["nama_pengguna"] = $db["nama"];
                $_SESSION["username"] = $db["username"];
                $_SESSION["user_level"] = "guru";
                header("location:dashboard/index.php");
            }
            $_SESSION["status"] = true;
            array_push($respondTable["s_pengguna"],$db);
            exit(0);
        }
    }else{
        $_SESSION["status"] = false;
        header("location:index.php");
        exit(0);
    }
}
?>
