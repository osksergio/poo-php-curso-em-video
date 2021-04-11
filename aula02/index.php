<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - Curso POO - PHP</title>
    </head>
    <body>

        <h1>Aula #2b - Criando Classes e Objetos em PHP</h1>

        <?php
            require_once './Caneta.php';
            
            // instância c1 da classe Caneta
            $c1 = new Caneta();
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->tampada = false;
            $c1->destampar();
            echo "<pre>";            
            print_r($c1);
            echo "</pre>";            

            echo "</br>";

            // instância c2 da classe Caneta            
            $c2 = new Caneta;
            $c2->cor = "Verde";
            $c2->carga = 50;
            $c2->tampar();

            echo "<pre>";
            print_r($c2);
            echo "</pre>";            
        ?>
    </body>
</html>
