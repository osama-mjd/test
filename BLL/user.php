<?php


require_once ('C:\xampp\htdocs\php_l2\DAL\MyDb.php');
class user extends MyDb {
    
    function login($email,$password)
    {
        $rs= $this->readData("select * from users where user_email=? and user_password=?",
                "ss", array(&$_POST["email"],&$_POST["password"]));
        if($rs->num_rows>0){
            return 1;
            
        }
        else {
            return 0;    
        }
    }
     function getUserType($email)
    {
        return $this->readData(
         "select user_type from users where user_email=?",
                "s", array(&$email));
    }
    function lastUser()
    {
        return $this->readAllData("select * from users order by user_id desc LIMIT 8");
    }
    function allUser()
    {
        return $this->readAllData("select 8 from users");
    }

}
