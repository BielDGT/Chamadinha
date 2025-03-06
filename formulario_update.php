<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input {
        margin: 10px;
    }
</style>

<!-- 
    METODO DE ENVIO :
    GET = manda informações atraves de URL
    POST = manda informações atraves do corpo do arqiuvo...

    ACTION: fala pra onde enviar os dados

-->

<?php

$id_alunos = $_GET['id'];

var_dump($id_alunos);

$dsn = 'mysql:dbname=db_chamada;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = "SELECT tb_info_alunos.*, tb_alunos.nome FROM tb_info_alunos INNER JOIN tb_alunos ON tb_alunos.id = tb_info_alunos.id_alunos WHERE tb_info_alunos.id_alunos =  " . $id_alunos;

$dados = $banco->query($select)->fetch();

// echo '<pre>';
// var_dump($dados)
//SELECT tb_info_alunos.*, tb_alunos.nome FROM tb_info_alunos INNER JOIN tb_alunos ON tb_alunos.id = tb_info_alunos.id_alunos WHERE tb_info_alunos.id_alunos = 4;


?>


<main class="container text-center my-5">
    <h2>Formulario de Update</h2>
    <form action="./aluno_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <input type="text" placeholder="Nome" class="form-control" name="nome" value="<?php echo $dados['nome'] ?>">
        <input type="number" placeholder="telefone" class="form-control" name="tel" value="<?php echo $dados['telefone'] ?>">
        <input type="email" placeholder="E-mail" class="form-control" name="email" value="<?php echo $dados['email'] ?>">
        <input type="date" placeholder="Nascimento" class="form-control" name="nasc" value="<?php echo $dados['nascimento'] ?>">
        <div>
            <label>Frequente?</label>
            <input type="checkbox" name="frequente" value="<?php echo $dados['frequente'] ?>" checked="<?php echo $dados['frequente'] ?>">
        </div>
        <input id="img-input" type="file" accept="image/*" class="form-control" name="img">
        <div id="img-container">
            <img id="preview" src="./img/img/<?php echo $dados['img'] ?>">
        </div>
        <input type="submit" class="form-control">
    </form>
</main>

<script src="./java.js"></script>