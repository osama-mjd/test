<?php

include 'MyCon.php';
class MyDb extends MyCon{
    
    public function writeData($sql,$dt,$params)
    {
        $con=$this->connect();
        $st=$con->prepare($sql);
        call_user_func_array(array($st,"bind_param"),
                    array_merge(array($dt),$params));
        $st->execute();
    }
    
    public function readData($sql,$dt,$params)
    {
        $con=$this->connect();
        $st=$con->prepare($sql);
        call_user_func_array(array($st,"bind_param"),
                    array_merge(array($dt),$params));
        $st->execute();
        $rs=$st->get_result();
        return $rs;
    }
    
    public function readAllData($sql)
    {
        $con=$this->connect();
        $st=$con->prepare($sql);
        $st->execute();
        $rs=$st->get_result();
        return $rs;
    }
    
}
