
<?php // abrindo o arquivo php, para finalizar basta incluir no final </

session_start();

$categorias = [];
$categorias [] = 'infantil';
$categorias [] = 'adolescente';
$categorias [] = 'adulto';

//print_r($categorias); //testar a categoria se está rodadndo ok

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION ['mensagem-de-erro'] = 'o nome não pode ser vazio';
    header('location: index.php');
    return;
}
else if(strlen($nome) < 3)
{
    $_SESSION ['mensagem-de-erro'] = 'o nome não pode conter menos de 3 caracteres';
    header('location: index.php');
    return;
}
else if(strlen($nome) > 40)
{
    $_SESSION ['mensagem-de-erro'] = 'o nome é muito extenso';
    header('location: index.php');
    return;
}
else if(!is_numeric($idade))
{
    $_SESSION ['mensagem-de-erro'] = 'informe um numero para a idade';
    header('location: index.php');
    return;
}

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categoria[$i] == 'infantil')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador".$nome. " compete na categoria infantil" .$categorias[$i];
            header("location: index.php");
            return;

        }
    }
}
else if ($idade >= 13 && $idade <=18)
 {
    for($i = 0; $i <= count($categorias); $i++)
    {

        if($categoria[$i] == 'adolescente')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador".$nome. " compete na categoria adolescente" .$categorias[$i   ];
            header("location: index.php");
            return;
        }
    }
 }
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categoria[$i] == 'adulto')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador".$nome. " compete na categoria adulto" .$categorias[$i];
            header("location: index.php");
            return;
        }
    }
}