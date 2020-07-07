<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias [] = 'infatil';
    $categorias [] = 'adolescente';
    $categorias [] = 'adulto';
    if (validaNome($nome) && validaIdade($idade))
    {
        if($idade >= 6 && $idade <= 12)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categoria[$i] == 'infantil')
                {
                    setarMenssagemSucesso("O nadador".$nome. " compete na categoria " .$categorias[$i]);
                    return null;

                }
            }
        }
        else if ($idade >= 13 && $idade <=18)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {

                if($categoria[$i] == 'adolescente')
                {
                    setarMenssagemSucesso("O nadador".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        else
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categoria[$i] == 'adulto')
                {
                    setarMenssagemSucesso( "O nadador".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }

    }
    else
    {
        return obterMensagemErro();
    }
}