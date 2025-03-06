<?php 

echo '<h1> Update de Aluno </h1>';

echo '<pre>';
var_dump($_POST);
var_dump($_GET);

$dsn = 'mysql:dbname=db_chamada;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$idForm = $_POST['id'];
$nomeFormulario = $_POST['nome'];

$update = 'UPDATE tb_alunos SET nome = :nome WHERE id = :id';

$box = $banco->prepare($update);

$box->execute([ 
    ':id' => $idForm,
    ':nome' => $nomeFormulario,
]);


$telFormulario = $_POST['tel'];
$emailFormulario = $_POST['email'];
$nascFormulario = $_POST['nasc'];
$frequenteFormulario = $_POST['frequente'];
$imgFormulario = $_POST['img'];

$update = 'UPDATE tb_info_alunos  SET telefone = :telefone, email = :email, nascimento = :nascimento, frequente = :frequente, img = :img WHERE id_alunos = :id' ;

$box = $banco->prepare($update);

$box->execute([ 
    ':id' => $idForm,
    ':telefone' => $telFormulario,
    ':email' => $emailFormulario,
    ':nascimento' => $nascFormulario,
    ':frequente' => $frequenteFormulario,
    ':img' => $imgFormulario,

]);