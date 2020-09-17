<?php
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Paciente</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome"> <b>Nome:</b> </label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">E-mail:</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="idade" id="idade">
                <label for="idade">Idade</label>
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
                <input type="number" name="cartao_sus" id="cartao_sus">
                <label for="cartao_sus">Cartão SUS:</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="cep" id="cep">
                <label for="cep">CEP:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="rua" id="rua">
                <label for="rua">Rua:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="bairro" id="bairro">
                <label for="bairro">Bairro:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cidade" id="cidade">
                <label for="cidade">Cidade:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="estado" id="estado">
                <label for="estado">Estado:</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">CADASTRAR</button>
            <a href="pacientes.php" type="submit" class="btn green">LISTA DE PACIENTES</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>