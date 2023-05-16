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
    <div class="container w-25 mt-3 p-3 border border-primary rounded">
        <h1 class="mb-3 text-center">Registrati</h1>
        <form action="index.php" method="post">
            Cognome: <input type="text" name="cognome" id="cognome" class="form-control" required><br>

            Nome: <input type="text" name="nome" id="nome" class="form-control" required><br>

            Username: <input type="text" class="form-control" id="username" name="username" placeholder="Inserire username" required><br>
            Password: <input type="password" name="password" id="password" class="form-control" placeholder="Inserire password" required> <br>
            <center>
                <a href="index.php"><button type="button" class="btn btn-secondary">Annulla</button>
                    <input type="submit" name="register" value="conferma" class="btn btn-danger">
            </center>
        </form>
    </div>
</body>

</html>