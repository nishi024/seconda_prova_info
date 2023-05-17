<html>

<head>
</head>
<body>


    <?php
    include "c.php";

    if(!empty($_GET)){
        $username=$_GET["username"];
        $pass=$_GET["pass"];
        $a=0;


        $query = "SELECT d.username FROM controllore as d where d.username='$username' and pass='$pass';";
        $result = $conn->query($query)
        or die("<p>meglio cambi lavoro</p> <br>");
        
        while($row=$result->fetch_array()){
            echo "<center><h1>ti sei loggato correttamente</h1><br>";
            if($row["username"]=="admin"){echo "<center><p>vai alla pagina di aggiunta controlli " . "<a href=" . "admin.php" . ">qui</a>.<br></center>";}
            else{
                
                echo "vai alla pagina di aggiunta controlli " . "<a href=" . "aggiungiCC.php" . ">qui</a> oppure vai alla pagina per vedere i controlli <a href=" . "controlli.php" . ">qui</a></p> <br></center>";
            }
                $a=1;
                $_SESSION["user"]=$username;
                
            }
        }

        if($a==0){echo "<center><h1>non ti sei loggato correttamente, torna indietro <a href=" . "login.php" . ">qui</a></h1><br>";}
        $_GET=null;   
?>

</body>
</html>
