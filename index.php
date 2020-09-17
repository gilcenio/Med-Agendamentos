<?php
include_once 'php_action/db_connect.php';

include_once 'includes/header.php';
?>

<link rel="stylesheet" href="/css/index.css">

<div style="padding-left: 200px;" class="row">
    <div class="col s3">
        <h1>Pacintes</h1>
        <hr>
        <?php
        $sql = "SELECT * FROM pacientes";
        $resultado = mysqli_query($connect, $sql);
        while ($dados = mysqli_fetch_array($resultado)) :
        ?>
            <div class="row">
                <div class="col s12">
                    <div class="card blue darken-1">
                        <div class="card-content white-text">
                            <span class="card-title"><?php echo $dados['nome']; ?></span>
                            <p>Email: - <?php echo $dados['email']; ?></p>
                            <p>Idade: - <?php echo $dados['idade']; ?></p>
                            <p>Telefone: - <?php echo $dados['telefone']; ?></p>
                            <p>Cpf: - <?php echo $dados['cpf']; ?></p>
                            <p>Cartão SUS: - <?php echo $dados['cartao_sus']; ?></p>
                            <p>Cep: - <?php echo $dados['cep']; ?></p>
                            <p>Rua: - <?php echo $dados['rua']; ?></p>
                            <p>Bairro: - <?php echo $dados['bairro']; ?></p>
                            <p>Cidade: - <?php echo $dados['cidade']; ?></p>
                            <p>Estado: - <?php echo $dados['estado']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        ?>
    </div>
    <div class="col s3">
        <h1>Médicos</h1>
        <hr>
        <?php
        $sql = "SELECT * FROM profissionais";
        $resultado = mysqli_query($connect, $sql);
        while ($dados = mysqli_fetch_array($resultado)) :
        ?>
            <div class="row">
                <div class="col s12">
                    <div class="card green darken-1">
                        <div class="card-content white-text">
                            <span class="card-title"><?php echo $dados['nome']; ?></span>
                            <p>Email: - <?php echo $dados['email']; ?></p>
                            <p>Telefone: - <?php echo $dados['telefone']; ?></p>
                            <p>Cpf: - <?php echo $dados['cpf']; ?></p>
                            <p>Profissão: - <?php echo $dados['profissao']; ?></p>
                            <p>Especialidade: - <?php echo $dados['especialidade']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        ?>
    </div>
    <div class="col s6">
        <h1>Agendamentos</h1>
        <hr>
        <?php
        $sql = "SELECT * FROM agendamentos";
        $resultado = mysqli_query($connect, $sql);
        while ($dados = mysqli_fetch_array($resultado)) :
        ?>
            <div class="row">
                <div class="col s12">
                    <div class="card blue-grey lighten-2">
                        <div class="card-content white-text">
                            <div style="text-align: center;">
                                <h1>Catão de Retorno</h1>
                            </div>
                            <div style="border-style: solid; border-width: 1px;">
                                <span style="padding-left: 10px;" class="card-title"><?php echo $dados['nome_paciente']; ?></span>
                            </div>
                            <br>
                            <div style="border-style: solid; border-width: 1px;">
                                <table style="width:100%">
                                    <tr>
                                        <th>Idade:</th>
                                        <th>Catão SUS:</th>
                                        <th>CPF:</th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $dados['idade_paciente']; ?></td>
                                        <td><?php echo $dados['cartao_sus']; ?></td>
                                        <td><?php echo $dados['cpf']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <div style="border-style: solid; border-width: 1px;">
                                <table style="width:100%">
                                    <tr>
                                        <th colspan="3">Agendado para:</th>
                                    </tr>
                                    <tr>
                                        <th>Data:</th>
                                        <th>Hora:</th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $dados['data']; ?></td>
                                        <td><?php echo $dados['hora']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <div style="border-style: solid; border-width: 1px;">
                                <table style="width:100%">
                                    <tr>
                                        <th colspan="3">Médico:</th>
                                    </tr>
                                    <tr>
                                        <th>Nome:</th>
                                        <th>Especialidade:</th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $dados['nome_medico']; ?></td>
                                        <td><?php echo $dados['especialidade']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        ?>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>