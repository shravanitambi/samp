<?php
$email = $_POST['email'];
$host ="localhost";
$dbUsername= "root";
$dbPassword= "";
$dbname= "wanderer_stylist";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        $INSERT = "INSERT into email (email) values(?)";
            $stmt= $conn->prepare($INSERT);
            $stmt-> bind_param("s",$email);
            echo "New record inserted successfully";
            $conn->close();
            die();
    }
?>