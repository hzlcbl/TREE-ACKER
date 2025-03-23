<?php
    $lastname = $_POST['lastname'];
    $code = $_POST['code'];

    $con = new mysqli("localhost", "root", "", "database");
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);
    } else {
        $stmt = $con->prepare("select * from login where lastname = ?");
        $stmt->bind_param("s", $lastname);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['code'] === $code){
                header("Location: index.html");
                exit();
            } else {
                header("Location:login.html");
                exit();
            }
        } else {
            header("Location:login.html");
            exit();
        }
    } 
?>