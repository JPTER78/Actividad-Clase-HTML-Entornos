<!DOCTYPE html>
<html>
<head>
    <title>Departamento Seleccionado</title>
</head>

<body>
    
    <?php

        $departamento = $_POST['departamento'];
        $presupuesto;

        switch($departamento) {
            case 'Informatica':
                $presupuesto = 500;
                break;
            case 'Lengua':
                $presupuesto = 300;
                break;
            case 'Matematicas':
                $presupuesto = 600;
                break;
            case 'Ingles':
                $presupuesto = 200;
                break;
        }
        echo '<h1> El departamento de ' . $departamento . ' tiene un presupuesto de ' . $presupuesto . ' €. </h1>';

    ?>

</body>

</html>