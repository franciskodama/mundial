<?php
date_default_timezone_set('America/Sao_Paulo');

$debug = false;

if($debug)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cegg-street";
}
else
{
    $servername = "mysql02.streetsp1.hospedagemdesites.ws";
    $username = "streetsp1";
    $password = "streetdb@15";
    $dbname = "streetsp1";
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contact (name, phone, email, message, created_at) VALUES ('".$_POST['name']."', '".$_POST['phone']."', '".$_POST['email']."', '".$_POST['message']."', '".date('Y-m-d H:i:s')."')";

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);