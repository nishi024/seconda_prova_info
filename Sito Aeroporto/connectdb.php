
<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "aeroporto";
    $conn = mysqli_connect($hostname, $username, $password, $database); 

    if (!$conn) {
        die("Connessione al database fallita: " . mysqli_connect_error());
    }
?>
