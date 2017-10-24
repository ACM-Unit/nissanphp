<?php
Class DbConnection{
    function getdbconnect(){
        /*$conn = mysqli_connect('mysql317.1gb.ua', 'gbua_z_nis04a64', 'd3b2fa84ty', 'gbua_z_nis04a64') or  die("Couldn't connect");*/
        $conn = mysqli_connect('localhost', 'root', '111', 'nissan') or  die("Couldn't connect");
        return $conn;
    }
}
?>