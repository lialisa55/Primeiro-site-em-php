<html>
    <head>
        <title>Palavras</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $nome = "Gabriel Vitor";
            $sobrenome = "Abreu Ribeiro";
            $nacionalidade = "Brasileiro";
            $localDoNascimento = "Guarulhos, São Paulo";
            $diaDoNascimento = 19;
            $mesDoNascimento = 9;
            $anoDoNascimento = 1953;
            echo "Nome: " . $nome . " " . $sobrenome;
            echo "</br></br>";
            echo "Nacionalidade: " . $nacionalidade;
            echo "</br></br>";
            echo "Dia de nascimento: " . $diaDoNascimento . "/" . $mesDoNascimento . "/" . $anoDoNascimento;
            echo "</br></br>";
            echo "Local de Nascimento: " . $localDoNascimento
        ?>
        <?php
            echo "</br></br>";
            echo "<a href='index.php'>voltar</a>"
        ?>
    </body>
</html>