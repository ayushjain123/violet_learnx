<?php
error_reporting(0);
session_start();

if(!isset($_SESSION["user"])){
  header("Location: login.php");
}

if(isset($_POST["course_id"]) && isset($_POST["coursename"]) ){

$coursename=$_POST["course_id"];
$coursename=$_POST["coursename"];




$conn=mysqli_connect('localhost','root','','shopdb');

 if(!$conn) {
      die('Could not connect');
   }


   $sql = "INSERT INTO bag
      VALUES ('$course_id','$coursename')";



   $retval = mysqli_query( $conn, $sql );

   if(!$retval) {
      die('Could not enter data');
   }



   mysqli_close($conn);

   header("Location: bag.php");
   die();
   }
   header("Location: bag.php");

?>
