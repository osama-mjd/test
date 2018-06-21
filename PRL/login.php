<!DOCTYPE html>
<?php
session_start();
include "../BLL/user.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="bootstrap.min.js" type="text/javascript"></script>
        <script src="jquery-3.1.1.min.js" type="text/javascript"></script>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
     <script>
           $(document).ready(function(){
                $("#login").click(function(){
                    $.post("login_adp.php",{email: $("#email").val(),
                         password: $("#password").val()},
                     function(data,status){
                         if(data==1){
                             window.location="../PRL/admin/dashbord.php";
                             
                         }
                         else{
                             alert("login fail");
                             
                         }
                     });
                });
            });
        </script>
    </head>
    <body>
    <center>
         <br/>
        <br/>
        <br/>
        <img src="images/cpanel-logo.png" alt="logo" width="350px"/>
        <br/>
        <br/>
        <br/>
        <form action="" method="POST" class="form-control" style="width: 40%"><br/>
            <input type="text" placeholder="email" id="email" name="email"class="form-control"style="width: 40%" /><br/>
            <input type="password" placeholder="password" id="password" name="password"class="form-control" style="width: 40%"/><br/>
            <span style="color: red;font-weight: bold" id="error"></span><br/>
            <input type="checkbox" id="pass_rem"  />Remmeber Me<br/><br/>
            <input class="btn btn-danger" type="submit" value="LOGIN" name="login" id="login" style="width: 20%"/><br/>
        </form>
        <div id="errsor"></div>
    </center>
        <?php
     /*if(isset($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"]))
       {
           $u=new user();
          $s=$u->login($_POST["email"], $_POST["password"]);
if($s==1)
{
   $_SESSION["email"]=$_POST["email"];
   $rs=$u->getUserType($_POST["email"]);
   $row=$rs->fetch_assoc();
   $_SESSION["user_type"]=$row["user_type"];
    echo '<script>window.location="./admin/dashbord.php";</script>';
       }
 elseif($s==0) {
      
          echo '<script>document.getElementById("error").innerHTML = "Username OR Password wrong!!";
</script>';
       }}
       elseif (isset ($_POST["login"]) && empty ($_POST["email"]) && empty( $_POST["password"])) {
               echo '<script>document.getElementById("error").innerHTML = "Username And Password requeerd!!";
</script>';
   }
 */
        ?>
    </body>
</html>
