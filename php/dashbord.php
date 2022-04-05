<?php
/* // using normal cookies 
$user_id=$_COOKIE["user_id"];
$name=$_COOKIE["name"];
echo "hello".$name."<br>";
*/
// using seesion concept
session_start();
if(isset($_SESSION["user_id"]))
{
$user_id=$_SESSION["user_id"];
$name=$_SESSION["name"];
echo "hello".$name."<br>";
}
session_destroy();
?>
