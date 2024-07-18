<?php
    //echo phpinfo();
    /*
    // Create DB acess at hosting website
    $servername = "localhost";//servidor
    $database = "id20145121_webuserdb";//nome da base de dados
    $username = "id20145121_root";//utilizador
    $password = "Admin@123456";//psw do utilizador
    */

    // Create DB acess at localhost computer
    $servername = "localhost";//servidor
    $database = "ocapote";//nome da base de dados
    $username = "root";//utilizador
    $password = "root";//psw do utilizador

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
      die("DB Connection failed: " . mysqli_connect_error());
    }
?>