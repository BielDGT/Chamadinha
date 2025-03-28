<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
$dsn = 'mysql:dbname=db_chamada;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = "SELECT * FROM tb_alunos";

$resultado = $banco->query($select)->fetchAll();

// echo '<pre>'; //pre serve para organizar
// var_dump($resultado); //ele faz um debug das informações
?>

<main class="container my-5">
    <table class="table table-striped">
        <div class="my-3 d-flex justify-content-end">
            <a href="formulario.php" class="btn btn-success">Cadastrar Novo Aluno</a>
        </div>

        <tr>
            <td>    id  </td>
            <td>    nome  </td>
            <td class="text-center">    ação</td>
        </tr>

        <?php foreach($resultado as $linha) {?>
            <tr>
                <td>  <?=$linha['id'] ?> </td>
                <td>  <?php echo $linha['nome'] ?> </td>
                <td class="text-center">
                    <a class="btn btn-primary" href="./ficha.php?id_alunos=<?=$linha['id'] ?>">Abrir</a>
                    <a class="btn btn-warning" href="./formulario_update.php?id=<?=$linha['id'] ?>">Editar</a>
                    <a class="btn btn-danger" href="./aluno-delete.php?id=<?=$linha['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</main>