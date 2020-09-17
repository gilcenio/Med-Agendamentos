<?php
//conexao
include_once '../php_action/db_connect.php';

include_once '../includes/header-medicos.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM agendamentos WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Agendamento</h3>
        <form action="../php_action/update-agendamento.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
            <div class="input-field col s12">
                <input type="text" name="nome_medico" id="nome_medico" value="<?php echo $dados['nome_medico']; ?>">
                <label for="nome_medico"> <b>Nome do Médico:</b> </label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="especialidade" id="especialidade" value="<?php echo $dados['especialidade'] ?>">
                <label for="especialidade">Especialidade:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="nome_paciente" id="nome_paciente" value="<?php echo $dados['nome_paciente'] ?>">
                <label for="nome_paciente">Nome do Paciente:</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="idade_paciente" id="idade_paciente" value="<?php echo $dados['idade_paciente'] ?>">
                <label for="idade_paciente">Idade:</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="cartao_sus" id="cartao_sus" value="<?php echo $dados['cartao_sus'] ?>">
                <label for="cartao_sus">Cartão SUS:</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="cpf" id="cpf" value="<?php echo $dados['cpf'] ?>">
                <label for="cpf">CPF:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="data" id="data" value="<?php echo $dados['data']; ?>">
                <label for="data">Data:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="hora" id="hora" value="<?php echo $dados['hora']; ?>">
                <label for="hora">Hora:</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">ATUALIZAR</button>
            <a href="vizualizar.php" type="submit" class="btn green">LISTA DE AGENDAMENTOS</a>
        </form>
    </div>
</div>

<?php
include_once '../includes/footer.php';
?>