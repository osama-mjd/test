<?php


class MyCon {
    
    function connect()
    {
        $con=new mysqli("localhost","root","","level2");
        return $con;
    }
}
