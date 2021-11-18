<!DOCTYPE html>
<html>
    <head>
        <title>New Year Resolution</title>
        <link rel = "stylesheet" href="one-style.css">
    </head>
    <body>
        <span>This new year, I want to learn to..</span>
        <form id="form1" method="POST">
            <input type="text" name="resolution" id="input1">
        </form>
        <script type="text/javascript" src="resolution.js"></script>
    </body>
</html>
<?php
    if(isset($_POST['resolution'])){
        $resolution = $_POST['resolution'];
    }
    $servername = "localhost";
    $username = "root";
    /* Note: This is found under xampp control panel-> Apach-> config-> phpMyAdmin->
    config.inc->Authentication type and info */ 
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
// Database already exists.
    //$sqlDB = "CREATE DATABASE resolutions";
   /* if($conn->query($sqlDB) === TRUE){
        echo "database created susccessfully.";
    }
    else{
        echo "Error creating databse: " . $conn->error;
    } */

// <!-- echo "This new year, I want to learn to..";

?>