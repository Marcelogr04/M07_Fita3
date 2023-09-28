<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactes</title>
    <style>
        table {
                border-collapse: collapse;
                background-size: cover;
        }
        th, td {
                width: 50px;
                height: 50px;
                text-align: center;
                border: 1px solid black;
            }
    </style>
</head>
<body>
    <h1>PROCESSA CONTACTES</h1>
    <?php
    // Leer fichero contactes31.txt
    $fitxerEntrada = file('contactes31.txt');
    $contactes = array();
    //Guardar datos
    foreach ($fitxerEntrada as $dades) {
        //$dades = separar datos con cada coma
        $contactes[] = array(
            'nom' => $dades[0],
            'cognom1' => $dades[1],
            'cognom2' => $dades[2],
            'telefon' => $dades[3]
        );
    }

    // Mostrar contactos en una tabla
    echo '<table>';
    echo '<tr><th>Nom</th><th>Cognom1</th><th>Cognom2</th><th>Telefon</th></tr>';
    foreach ($contactes as $contacte) {
        echo '<tr>';
        echo '<td>'. $contacte['nom']. '</td>';
        echo '<td>'. $contacte['cognom1']. '</td>';
        echo '<td>'. $contacte['cognom2']. '</td>';
        echo '<td>'. $contacte['telefon']. '</td>';
        echo '</tr>';
    }
    echo '</table>';

    //Generar fichero contactes31b.txt y separado con #
    $fitxerSortida = file('contactes31b.txt');
    ?>

</body>
</html>
