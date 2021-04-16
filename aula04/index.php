<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de POO PHP</title>
</head>
<body>
    <h1>Aula #04b - Métodos Getter, Setter e Constructor</h1>

    <?php
        require_once './Caneta.php';

        $c1 = new Caneta( "BIC", "Azul", 0.5 );

        $c2 = new Caneta( "Compactor", "Vermelha", 0.7 );
        
        echo "<pre>";
        print_r($c1);
        echo "</pre>";

        echo "<pre>";
        print_r($c2);
        echo "</pre>";       
    ?>
</body>
</html>