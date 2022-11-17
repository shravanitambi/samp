<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(!empty($name) || !empty($email) || !empty($subject) || !empty($message)){
    $host ="localhost";
    $dbUsername= "root";
    $dbPassword= "";
    $dbname= "wanderer_stylist";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        $INSERT = "INSERT into contact (name, email, subject, message ) values(?,?,?,?)";
            $stmt= $conn->prepare($INSERT);
            $stmt-> bind_param("ssss", $name, $email, $subject, $message);
            echo "New record inserted successfully";
            $conn->close();
            die();
    }
}
else{
    echo"All fields are required";
    die();
}
?>