<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container w-25 mt-3 p-3 border border-info rounded">
        <h1 class="mb-3 text-center">Registrati</h1>
        <form action="index.php" method="post">
            Documento: <input type="text" name="documento" id="documento" class="form-control" placeholder="Inserire il documento" required><br>
            Nome: <input type="text" name="nome" id="nome" class="form-control" placeholder="Inserire nome" required><br>
            Cognome: <input type="text" name="cognome" id="cognome" class="form-control" placeholder="Inserire cognome" required><br>
            <div class="form-group">
                <label for="nazionalita">Nazionalità:</label>
                <input type="text" class="form-control" id="nazionalita" name="nazionalita" placeholder="Inserisci la nazionalità" required>
            </div><br>
            <div class="form-group">
                <label for="aeroportoDest">Aeroporto di destinazione:</label>
                <input type="text" class="form-control" id="aeroportoDest" name="aeroportoDest" placeholder="Inserisci l'aeroporto di destinazione">
            </div><br>
            <div class="form-group">
                <label for="aeroportoProv">Aeroporto di provenienza:</label>
                <input type="text" class="form-control" id="aeroportoProv" name="aeroportoProv" placeholder="Inserisci l'aeroporto di provenienza">
            </div><br>
            <div class="form-group">
                <label for="stato">Stato:</label>
                <input type="text" class="form-control" id="stato" name="stato" placeholder="Inserisci lo stato">
            </div><br>
            <div class="form-group">
                <label for="motivoViaggio">Motivo del viaggio:</label>
                <input type="text" class="form-control" id="motivoViaggio" name="motivoViaggio" placeholder="Inserisci il motivo del viaggio" required>
            </div><br>

            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Inserisci la categoria" required>
            </div>
            <div class="form-group">
                <label for="descrizione">Descrizione:</label>
                <input type="text" class="form-control" id="descrizione" name="descrizione" placeholder="Inserisci la descrizione" required>
            </div>
            <div class="form-group">
                <label for="quantita">Quantità:</label>
                <input type="number" class="form-control" id="quantita" name="quantita" placeholder="Inserisci la quantità" required>
            </div>
            <div class="form-group">
                <label for="stato">Stato:</label>
                <input type="text" class="form-control" id="stato" name="stato" placeholder="Inserisci lo stato" required>
                <br><center>
                    <a href="index.php"><button type="button" class="btn btn-secondary">Annulla</button>
                        <input type="submit" name="register" value="Conferma" class="btn btn-info">
                </center>
        </form>
    </div>

</body>

</html>
