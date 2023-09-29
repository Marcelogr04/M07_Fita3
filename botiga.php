<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botiga</title>
</head>
<body>
    <form method="POST">
        <?php
        //Crear formulari
        $file = fopen("productes.txt","r");
        while ($line = fgets($file)){
            echo "<input type='checkbox' name='prods[]' value='".trim($line)."'>$line</input><br>";
            /*echo "<p>$line</p>";*/
        }
        echo "<input type='text' name='usuario'>";
        echo "<input type='submit' value='Enviar'>";
        //Processar dades
        if (isset($_POST["prods"])){
            $user = $_POST["usuario"];
            $file2 = fopen("comandes.txt", "a");
            $comanda = $user;
            foreach ($_POST["prods"] as $producte) {
                $comanda .= ", ".$producte;
            }
            fwrite($file2, $comanda."\n");
        }
        ?>
    </form>
</body>
</html>
