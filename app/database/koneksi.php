<?php 
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
$conn = new mysqli("localhost", "root", "", "sekolah_db_sd");
if($conn->connect_errno){
    die("Connection database Error : ".mysqli_connect_errno());
}
// try{
//    $conn = new PDO("mysql:host=localhost; dbname=sekolah_db_sd;", "root","");
// }catch (Exception $e){
//     echo "error : ". $e->getMessage();;
// }
?>