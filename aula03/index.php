<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03 Curso POO / PHP</title>
    </head>
    <body>
        <h1>Aula #3b: Configurando visibilidade de Atributos e Métodos</h1>
        <?php
            require_once './Caneta.php';
            
            // instância c1 da classe Caneta
            $c1 = new Caneta();
            $c1->modelo = "BIC Cristal";
            $c1->cor = "Azul";

            //$c1->carga = 99;
            //$c1->tampada = true;

            echo "<pre>";
            print_r($c1);
            echo "</pre>";            
        ?>
    </body>
</html>
