<?php
Class DbConnection{
    function getdbconnect(){
        /*$conn = mysqli_connect('mysql314.1gb.ua', 'gbua_nissan', '4186a86eiop', 'gbua_nissan') or  die("Couldn't connect");*/
        $conn = mysqli_connect('localhost', 'root', '111', 'nissan') or  die("Couldn't connect");
        return $conn;
    }
}
?>