<?php


function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMenssagemErro('o nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    }
    else if(strlen($nome) < 3)
    {
        setarMenssagemErro ('o nome não pode conter menos de 3 caracteres');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMenssagemErro ('o nome é muito extenso');
        return false;
    }
    return true;

}
function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMenssagemErro('informe um numero para a idade');
        header('location: index.php');
        return false;
    }
    return true;
}


