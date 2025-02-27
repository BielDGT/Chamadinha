<?php 
echo '<h1>Deletar Aluno</h1>';

$dsn = 'mysql:dbname=db_chamada;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$idForm = $_GET['id'];

//apagando tb_alunos

$delete = "DELETE FROM tb_alunos WHERE id = :id " ;
$box = $banco->prepare($delete);
$box -> execute([
    ':id' => $idForm
]);

//apagando tb_info_alunos

$delete = "DELETE FROM tb_info_alunos WHERE id_alunos = :id_alunos " ;
$box = $banco->prepare($delete);
$box -> execute([
    ':id_alunos' => $idForm
]);

echo '<script> 
alert("Usuario Excluido com Sucesso!!!")
window.location.replace("index.php")
</script>';

//header('location: index.php');
