<?php

session_start();
include '../BLL/user.php';


$u=new User();
$s=$u->login($_POST["email"], $_POST["password"]);
if($s==1)
{
   $_SESSION["email"]=$_POST["email"];
   $rs=$u->getUserType($_POST["email"]);
   $row=$rs->fetch_assoc();
   $_SESSION["user_type"]=$row["user_type"];
  
  
}

echo $s;








