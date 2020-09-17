<?php
include_once '../php_action/db_connect.php';

include_once '../includes/header-medicos.php';

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Agendamento</h3>
        <table class="responsive-table centered striped highlight">
            <thead>
                <tr>
                    <th>Nome Médico:</th>
                    <th>Especialidade:</th>
                    <th>Nome Paciente:</th>
                    <th>Idade:</th>
                    <th>Cartão SUS:</th>
                    <th>CPF:</th>
                    <th>Data:</th>
                    <th>Hora:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM agendamentos";
                $resultado = mysqli_query($connect, $sql);
                while ($dados = mysqli_fetch_array($resultado)) :
                ?>
                    <tr>
                        <td><?php echo $dados['nome_medico']; ?></td>
                        <td><?php echo $dados['especialidade']; ?></td>
                        <td><?php echo $dados['nome_paciente']; ?></td>
                        <td><?php echo $dados['idade_paciente']; ?></td>
                        <td><?php echo $dados['cartao_sus']; ?></td>
                        <td><?php echo $dados['cpf']; ?></td>
                        <td><?php echo $dados['data']; ?></td>
                        <td><?php echo $dados['hora']; ?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating blue"><i class="material-icons">edit</i></a></td>
                        <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                        <!-- Modal Structure -->
                        <div id="modal<?php echo $dados['id']; ?>" class="modal">
                            <div class="modal-content">
                                <h4>Opa!</h4>
                                <p>Tem certeza que quer excluir esse agendamento?</p>
                            </div>
                            <div class="modal-footer">

                                <form action="../php_action/delete-agendamento.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                    <button type="submit" name="btn-deletar" class="btn red">Sim, deletar</button>
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                </form>

                            </div>
                        </div>
                    </tr>
                <?php
                endwhile;
                ?>
            </tbody>
        </table>
        <br>
        <a href="agendar.php" class="btn">NOVO AGENDAMENTO</a>
    </div>
</div>

<?php
include_once '../includes/footer.php';
?>