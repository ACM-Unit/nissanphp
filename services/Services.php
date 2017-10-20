<?php

require_once('DbConnection.php');
class Services
{
    function getModels() {
        $mysqli = new DbConnection();
        $models = array();
        if ($result = mysqli_query($mysqli->getdbconnect(), "SELECT * FROM model")) {
            while($tmp = $result->fetch_assoc()) {
                $models [] = $tmp;
            }
            $result->close();
        }
        return $models;
    }

    function getColors($name) {
        $mysqli = new DbConnection();
        $colors = array();
        if ($result = mysqli_query($mysqli->getdbconnect(), "SELECT * FROM colors c, model m where m.id = c.carmodel_id and m.name = '$name'")) {
            while($tmp = $result->fetch_assoc()) {
                $colors [] = $tmp;
            }
            $result->close();
        }
        return $colors;
    }
    function getCarByName($name) {
        $mysqli = new DbConnection();
        if ($result = mysqli_query($mysqli->getdbconnect(), "SELECT * FROM model where name = '$name'")) {
            while($tmp = $result->fetch_assoc()) {
                $car = $tmp;
            }
            $result->close();
        }
        return $car;
    }
}
?>
