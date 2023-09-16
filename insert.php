<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require_once("conexion.php");

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $password = $_POST['password'];

        $query = "INSERT INTO registro(name, email, phone, city, password)
        VALUES('$name', '$email', '$phone', '$city', sha('$password'))";

        $result = $conexion->query($query);

        if($result === true){
            echo "Usuario creado";
        }else{
            echo"Error";
        }
        $conexion->close();
    }
?>