<?php
require("./alunos.php");
require("./funcoes.php");

//Criar a função (trazer do exercício anterior)
//Verificar se a novaNota está setada
if (isset($_GET["novaNota"])) {
    //Se sim, recever os dados via $_GET
    $nome = $_GET["nomeAluno"];
    $nota = $_GET["novaNota"];
    alterarNota($alunos, $nome, $nota);
}
aprovarReprovar($alunos);
//Chamar a função de alterarNota
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
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
                <tr onclick="showFormNota('<?= $aluno['nome'] ?>')">
                    <td><?= $aluno["nome"] ?></td>
                    <td><?= $aluno["idade"] ?></td>
                    <td><?= $aluno["nota"] ?></td>
                    <td class="<?= strtolower($aluno["situacao"]) ?>"><?= isset($aluno["situacao"]) ? $aluno["situacao"] : "" ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </section>

    <div class="container-form-nota">
        <form method="$_GET">
            <input type="number" min="0" max="100" placeholder="Digite a nova nota" name="novaNota" />
            <input type="hidden" id="nomeAluno" name="nomeAluno">
            <button>Alterar</button>
        </form>
    </div>
</body>

</html>