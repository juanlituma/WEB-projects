//create databse. Do onot run twice

<?php
$db_server = "localhost";
$db_user ="root";
$db_password = "";

$conn = mysqli_connect($db_server,$db_user,$db_password);

if (!$conn){
    die ("Connection failed:". mysqli_connect_error())   ; 
        echo"your are connected";
}


// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
echo "Database created successfully";
} else {
echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>