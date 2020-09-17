<?php
include_once '../php_action/db_connect.php';

include_once '../includes/header-medicos.php';

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <br>
        <h3 class="light">Novo Agendamento</h3>
        <form action="../php_action/create-agendamento.php" method="POST">
            <div class="input-field col s12">
                <select type="text" name="nome_medico" id="nome_medico">
                    <option value="" disabled selected>Selecione um nome</option>
                    <?php
                    $sql = "SELECT * FROM profissionais";
                    $resultado = mysqli_query($connect, $sql);
                    while ($dados = mysqli_fetch_array($resultado)) :
                    ?>
                        <option value="<?php echo $dados['nome']; ?>"><?php echo $dados['nome']; ?></option>
                    <?php
                    endwhile;
                    ?>
                </select>
                <label>Nome do Médico:</label>
            </div>

            <div class="input-field col s12">
                <select type="text" name="especialidade" id="especialidade">
                    <option value="" disabled selected>Selecione uma especialidade</option>
                    <?php
                    $sql = "SELECT * FROM profissionais";
                    $resultado = mysqli_query($connect, $sql);
                    while ($dados = mysqli_fetch_array($resultado)) :
                    ?>
                        <option value="<?php echo $dados['especialidade']; ?>"><?php echo $dados['especialidade']; ?></option>
                    <?php
                    endwhile;
                    ?>
                </select>
                <label>Especialidade:</label>
            </div>
           
            <div class="input-field col s12">
                <select type="text" name="nome_paciente" id="nome_paciente">
                    <option value="" disabled selected>Selecione um nome</option>
                    <?php
                    $sql = "SELECT * FROM pacientes";
                    $resultado = mysqli_query($connect, $sql);
                    while ($dados = mysqli_fetch_array($resultado)) :
                    ?>
                        <option value="<?php echo $dados['nome']; ?>"><?php echo $dados['nome']; ?></option>
                    <?php
                    endwhile;
                    ?>
                </select>
                <label>Nome do Paciente:</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="idade_paciente" id="idade_paciente">
                <label for="idade_paciente">Idade:</label>
            </div>

            <div class="input-field col s12">
                <select type="number" name="cartao_sus" id="cartao_sus">
                    <option value="" disabled selected>Selecione cartão do SUS</option>
                    <?php
                    $sql = "SELECT * FROM pacientes";
                    $resultado = mysqli_query($connect, $sql);
                    while ($dados = mysqli_fetch_array($resultado)) :
                    ?>
                        <option value="<?php echo $dados['cartao_sus']; ?>"><?php echo $dados['cartao_sus']; ?></option>
                    <?php
                    endwhile;
                    ?>
                </select>
                <label>Cartão SUS:</label>
            </div>

            <div class="input-field col s12">
                <select type="number" name="cpf" id="cpf">
                    <option value="" disabled selected>Selecione CPF</option>
                    <?php
                    $sql = "SELECT * FROM pacientes";
                    $resultado = mysqli_query($connect, $sql);
                    while ($dados = mysqli_fetch_array($resultado)) :
                    ?>
                        <option value="<?php echo $dados['cpf']; ?>"><?php echo $dados['cpf']; ?></option>
                    <?php
                    endwhile;
                    ?>
                </select>
                <label>CPF:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="data" id="data">
                <label for="data">Data:</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="hora" id="hora">
                <label for="hora">Hora:</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">CADASTRAR</button>
            <a href="vizualizar.php" type="submit" class="btn green">LISTA DE AGENDAMENTOS</a>
        </form>
    </div>
</div>

<?php
include_once '../includes/footer.php';
?>