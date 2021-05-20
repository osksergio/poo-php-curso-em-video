<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Banco [Curso de introdução a POO em PHP ]</title>
</head>
<body>
    <pre>
        <?php
            require_once './ContaBanco.php';
            $p1 = new ContaBanco(); // Jubileu
            $p2 = new ContaBanco(); // Creuza

            $p1->abrirConta("CC"); // Abrir conta corrente do Jubileu
            $p1->setNumConta(1111);
            $p1->setDono("Jubileu");

            $p2->abrirConta("CP"); // Abrir conta poupança da Creuza
            $p2->setNumConta(2222);
            $p2->setDono("Creuza");

            $p1->depositar(300);
            $p2->depositar(500);

            $p2->sacar(100);

            $p1->pagarMensal();
            $p2->pagarMensal();

            $p1->sacar(338);
            $p2->sacar(530);

            $p1->fecharConta();
            $p2->fecharConta();

            print_r($p1);
            print_r($p2);
        ?>
    </pre>    
</body>
</html>