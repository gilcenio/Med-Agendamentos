<?php
include_once '../includes/header-medicos.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Médico</h3>
        <form action="../php_action/create-medicos.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome"> <b>Nome:</b> </label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">E-mail:</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="telefone" id="telefone">
                <label for="telefone">Telefone:</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="cpf" id="cpf">
                <label for="cpf">CPF:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="profissao" id="profissao">
                <label for="profissao">Profissão:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="especialidade" id="especialidade">
                <label for="especialidade">Especialidade:</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">CADASTRAR</button>
            <a href="index-medicos.php" type="submit" class="btn green">LISTA DE MÉDICOS</a>
        </form>
    </div>
</div>

<?php
include_once '../includes/footer.php';
?>