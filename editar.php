<?php
//conexao
include_once 'php_action/db_connect.php';

include_once 'includes/header.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM pacientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Paciente</h3>
        <form action="php_action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome"> <b>Nome:</b> </label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $dados['email'] ?>">
                <label for="email">E-mail:</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="idade" id="idade" value="<?php echo $dados['idade'] ?>">
                <label for="idade">Idade</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="telefone" id="telefone" value="<?php echo $dados['telefone'] ?>">
                <label for="telefone">Telefone:</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="cpf" id="cpf" value="<?php echo $dados['cpf'] ?>">
                <label for="cpf">CPF:</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="cartao_sus" id="cartao_sus" value="<?php echo $dados['cartao_sus'] ?>">
                <label for="cartao_sus">Cartão SUS:</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="cep" id="cep" value="<?php echo $dados['cep'] ?>">
                <label for="cep">CEP:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="rua" id="rua" value="<?php echo $dados['rua'] ?>">
                <label for="rua">Rua:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="bairro" id="bairro" value="<?php echo $dados['bairro'] ?>">
                <label for="bairro">Bairro:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cidade" id="cidade" value="<?php echo $dados['cidade'] ?>">
                <label for="cidade">Cidade:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="estado" id="estado" value="<?php echo $dados['estado'] ?>">
                <label for="estado">Estado:</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">ATUALIZAR</button>
            <a href="pacientes.php" type="submit" class="btn green">LISTA DE PACIENTES</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>