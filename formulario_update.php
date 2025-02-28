<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input{
        margin: 10px;
    }
</style>

<!-- 
    METODO DE ENVIO :
    GET = manda informações atraves de URL
    POST = manda informações atraves do corpo do arqiuvo...

    ACTION: fala pra onde enviar os dados

-->

    <main class="container text-center my-5">
        <h2>Formulario de Update</h2>
        <form action="./aluno_update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <input type="text" placeholder="Nome" class="form-control" name="nome">
            <input type="number" placeholder="telefone" class="form-control" name="tel">
            <input type="email" placeholder="E-mail" class="form-control" name="email">
            <input type="date" placeholder="Nascimento" class="form-control" name="nasc">
            <div>
                <label>Frequente?</label>
            <input type="checkbox" name="frequente">
            </div>
            <input type="file" accept="image/*" class="form-control" name="img">
            <input type="submit" class="form-control">
        </form>
    </main>
