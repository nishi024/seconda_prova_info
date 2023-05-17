<!DOCTYPE html>
<html>

<head>
    <title>Pagina login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center" class="form-group">
            <div class="col-md-6">
                <h2 class="text-center">Inserire credenziali</h2>
                <form action="home.php" method="get">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Inserisci il tuo username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Inserisci la tua password" required>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info">Accedi</button>
                            </div>
                            <div class="col-md-6">
                                <a href="registrazione.php" class="btn btn-link">Registrati</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
