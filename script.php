Iniciando mini projeto em php.

<?php // abrindo o arquivo php, para finalizar basta incluir no final </

$categorias = [];
$categorias [] = 'infantil';
$categorias [] = 'adolescente';
$categorias [] = 'adulto';

//print_r($categorias); //testar a categoria se está rodadndo ok

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'o nome não pode ser vazio';
    return;
}
if(strlen($nome) < 3)
{
    echo 'o nome deve conter mais de 3 caracteres';
    return;
}
if(strlen($nome) > 40)
{
    echo 'o nome é muito extenso';
    return;
}
if(!is_numeric($idade))
{
    echo 'Informe um número para idade';
    return;
}

//Inserindo as váriaveis e condicionais para saber em qual Categoria o lucas se encaixa

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categoria[$i] == 'infantil')
            echo "O nadador".$nome. " compete na categoria infantil";
    }
}
else if ($idade >= 13 && $idade <=18)
 {
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categoria[$i] == 'adolescente')
            echo "O nadador".$nome. " compete na categoria adolescente";
    }
 }
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categoria[$i] == 'adulto')
            echo "O nadador".$nome. " compete na categoria adulto";
    }
}