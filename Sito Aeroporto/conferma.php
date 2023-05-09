<?php

$documento=$_POST['documento'];
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$nazionalita=$_POST['nazionalita'];
$dest=$_POST['dest'];
$prov=$_POST['prov'];
$motivo=$_POST['motivo'];

$documento_merce=$_POST['documento'];
$categoria=$_POST['categoria'];
$descrizione=$_POST['descrizione'];
$quantita=$_POST['quantita'];

include "c.php";
$query = "INSERT INTO passeggero (documento, nome, cognome, nazionalita, aeroportoDest, aeroportoProv, motivoViaggio)
 VALUES ('$documento', '$nome', '$cognome', '$nazionalita', '$dest', '$prov', '$motivo')";


/*if () {

  $result = $mysqli->query($query)
    or die("echo '<script type='text/javascript'>alert('Sign up fallito, email già esistente');</script>'; ");

  header("index.php");
}

LO FACCIO A CASASSASSASASAASAS
*/


?>