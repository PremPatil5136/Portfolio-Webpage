<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];

    // data base connection
    @include 'port_config3.php';
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contact(username, email, project, message)
            values(?,?,?,?)");
        $stmt->bind_param("ssss",$username, $email, $project, $message);
        $stmt->execute();
        echo "Submitted successfull...";
        $stmt->close();
        $conn->close();
    }
?>