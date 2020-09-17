<?php
//conexao
include_once '../php_action/db_connect.php';

include_once '../includes/header-medicos.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM profissionais WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Paciente</h3>
        <form action="../php_action/update-medicos.php" method="POST">
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
                <input type="number" name="telefone" id="telefone" value="<?php echo $dados['telefone'] ?>">
                <label for="telefone">Telefone:</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="cpf" id="cpf" value="<?php echo $dados['cpf'] ?>">
                <label for="cpf">CPF:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="profissao" id="profissao" value="<?php echo $dados['profissao'] ?>">
                <label for="profissao">Profissao:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="especialidade" id="especialidade" value="<?php echo $dados['especialidade'] ?>">
                <label for="especialidade">Especialidade:</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">ATUALIZAR</button>
            <a href="index-medicos.php" type="submit" class="btn green">LISTA DE MÉDICOS</a>
        </form>
    </div>
</div>

<?php
include_once '../includes/footer.php';
?>