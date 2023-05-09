<html>
<head>
</head>

<body>
    <center>
        <form action="aggiungiContr.php" method="post">
        <h1>Compila i requisiti</h1>
        <br>
        <label for="documento">Documento passeggero: </label><br>
        <input type="text" id="documento" name="documento" require><br><br>
        <label for="data">data di oggi</label><br>
        <input type="date" id="data" name="data" require><br><br>
        <label for="importo">importo doganale</label><br>
        <input type="number" id="importo" name="importo" require><br><br>
        <label for="contes">contestazioni: </label><br>
        <input type="radio" id="si" name="contes" value=1>
        <label for="si">si</label><br>
        <input type="radio" id="no" name="contes" value=0>
        <label for="no">no</label><br><br>
        <label for="tempo">tempo</label><br>
        <input type="time" id="tempo" name="tempo" require><br><br>
        <label for="durata">durata (in minuti)</label><br>
        <input type="int" id="durata" name="durata" require><br><br>
        <label for="note">note</label><br>
        <input type="text" id="note" name="note" require><br><br>
        <label for="esito">esito controllo: </label>
        <select name="esito" id="esito">
            <option value="merce passata">merce passata</option>
            <option value="merce fermata">merce fermata</option>
        </select>
        <br><br>
        <?php

            include "c.php";

            $query = "SELECT nome_PDC FROM Punto_controllo;";

            $result = $conn->query($query)
            or die("<p>meglio che cambi lavoro</p> <br>   <p>se vuoi riprovare clicca <a href='index.php'>qui</a></p>
            ");

            echo "<label for='pdc'>punto di controllo: </label>";
            echo "<select name='pdc' id='pdc' require>";

            while($row=$result->fetch_array()){


                echo "<option value='" . $row['nome_PDC'] . "'>" . $row['nome_PDC'] . "</option>";

            }

            echo "</select>"
            
            ?>
            <br><br>
            <input type="submit" value="continua">    
        </form>
    </center>
    </body>
    </html>