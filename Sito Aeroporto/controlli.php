<html>
<head>
    <style>

    .box{
        border: solid 1px lightgrey;
        border-radius: 15px;
        margin-top: 20px;
        margin-bottom: 20px;
        width: 500px;

    }


    </style>
</head>

<body>
    <center>
        <form action="conferma.php" method="get">
        <h1>CONTROLLI</h1><br>
        <?php

            include "c.php";

            $query = "SELECT * FROM controllo order by (datazione) desc;";

            $result = $conn->query($query)
            or die("<p>meglio che cambi lavoro</p> <br>   <p>se vuoi riprovare clicca <a href='index.php'>qui</a></p>
            ");

            

            while($row=$result->fetch_array()){


                echo "<div class='box'>";
                echo "<p>Username: " . $row['username'] . "; Punto di controllo: " . $row['nome_PDC'] . ";</p>";
                echo "<p>data: " . $row['datazione'] . "; ora: " . $row['tempo'] . "; durata: " . $row['durata'] . " minuti.;</p>";
                echo "<p>importo dazio doganale: " . $row['importo'] . "; contestazioni: " . $row['contestazione'] . ";</p>";
                echo "<p>esito controllo: " . $row['esito'] . ";</p>";
                echo "<p>note: " . $row['note'] . ".</p></div>";
                }
            
            ?>
            <br><br>
                
        </form>
    </center>
    </body>
    </html>