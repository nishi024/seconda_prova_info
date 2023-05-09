<html>

<head>
</head>
<body>


    <?php
    include "c.php";

    if(!empty($_POST)){
    $documento=$_POST["documento"];
    $data=$_POST["data"];
    $importo=$_POST["importo"];
    $contes=$_POST["contes"];
    $tempo=$_POST["tempo"]; 
    $esito=$_POST["esito"];
    $durata=$_POST["durata"];
    $pdc=$_POST["pdc"];
    $username=$_SESSION["user"];
    $note=$_POST["note"];

    $sql = "INSERT INTO Controllo (username, nome_pdc, datazione, importo, contestazione, documento_passeggero, tempo, durata, esito, note)
    VALUES ('$username', '$pdc', '$data', '$importo', '$contes', '$documento', '$tempo', '$durata', '$esito', '$note');";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h1>New record created successfully</h1><br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $_POST=null;

    
    }
    
    