<!DOCTYPE html>
<html>

<head>
    <title>Pagina di Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Inserire le credenziali</h1>
        <form action="home.php" method="get">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Inserisci il tuo username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Inserisci la tua password" required>
            </div>
            <button type="submit" class="btn btn-primary">Accedi</button>
        </form>
        <p>Se non sei registrato clicca <a href="registrazione.php">qui</a></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
