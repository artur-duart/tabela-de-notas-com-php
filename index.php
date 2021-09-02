<?php
require("./alunos.php");
require("./funcoes.php");
aprovarReprovar($alunos);

//Importar o Arquivo de funções (criá-lo)
//Chamar a função fechar notas e pronto
//Pintar a celula do aluno aprovado de verde
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nota dos Alunos</title>
</head>

<body>
    <section>
        <h1>Tabela de Notas</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Nota</th>
                <th>Situação</th>
            </tr>
            <?php foreach ($alunos as $aluno) : ?>
                <tr>
                    <td><?= $aluno["nome"] ?></td>
                    <td><?= $aluno["idade"] ?></td>
                    <td><?= $aluno["nota"] ?></td>
                    <td class="<?= strtolower($aluno["situacao"]) ?>"><?= isset($aluno["situacao"]) ? $aluno["situacao"] : "" ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</body>

</html>