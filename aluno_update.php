<?php 

echo '<h1> Update de Aluno </h1>';

echo '<pre>';
var_dump($_POST);

$nomeFormulario = $_POST['nome'];


$dsn = 'mysql:dbname=db_chamada;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$insert = 'UPDATE tb_alunos SET nome = :nome WHERE id = :id';

$box = $banco->prepare($insert);

$box->execute([ 
    ':nome' => $nomeFormulario,
]);


// $telFormulario = $_POST['tel'];
// $emailFormulario = $_POST['email'];
// $nascFormulario = $_POST['nasc'];
// $frequenteFormulario = $_POST['frequente'];
// $imgFormulario = $_POST['img'];
// $id_aluno = $banco->lastInsertId();

// $insert2 = 'UPDATE tb_info_alunos (telefone, email, nascimento, frequente, id_alunos, img) 
// VALUE (:telefone, :email, :nascimento, :frequente, :id_alunos, :img)';

// $box = $banco->prepare($insert2);

// $box->execute([ 
//     ':telefone' => $telFormulario,
//     ':email' => $emailFormulario,
//     ':nascimento' => $nascFormulario,
//     ':frequente' => $frequenteFormulario,
//     ':img' => $imgFormulario,
//     ':id_alunos' => $id_aluno,

// ]);