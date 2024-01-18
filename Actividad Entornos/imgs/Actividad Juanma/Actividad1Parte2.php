<!DOCTYPE html>
<html>
<head>
    <title> Tablas de multiplicar </title>
</head>
<body>

    <?php
    $numero = $_POST['numero'];
    for ($i = 1; $i <= 10; $i++) {

        echo "<table border='1'>";

        echo "<tr><th>Tabla del $i</th></tr>";

        for ($j = 1; $j <= $numero; $j++) {

            echo "<tr><td>$i x $j = " . $i*$j . "</td></tr>";

        }

        echo "</table><br>";

    }
    ?>

</body>
</html>