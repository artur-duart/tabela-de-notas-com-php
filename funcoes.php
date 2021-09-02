<?php
function aprovarReprovar(array &$turma)
{

    foreach ($turma as $chave => $aluno) {
        if ($aluno["nota"] < 50) {
            $turma[$chave]["situacao"] = "Reprovado";
        } else {
            $turma[$chave]["situacao"] = "Aprovado";
        }
    }
}

function alterarNota(array &$turma, $nome, $novaNota)
{
    foreach ($turma as $chave => $aluno) {
        if ($aluno["nome"] == $nome) {
            $turma[$chave]["nota"] = $novaNota;
            return;
        }
    }
}
