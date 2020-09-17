<?php
include_once '../php_action/db_connect.php';

include_once '../includes/header-medicos.php';

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Médicos</h3>
        <table class="responsive-table centered striped highlight">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>E-mail:</th>
                    <th>Telefone:</th>
                    <th>CPF:</th>
                    <th>Profissao:</th>
                    <th>Especialidade:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM profissionais";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) > 0) :

                    while ($dados = mysqli_fetch_array($resultado)) :
                ?>
                        <tr>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['email']; ?></td>
                            <td><?php echo $dados['telefone']; ?></td>
                            <td><?php echo $dados['cpf']; ?></td>
                            <td><?php echo $dados['profissao']; ?></td>
                            <td><?php echo $dados['especialidade']; ?></td>
                            <td><a href="editar-medicos.php?id=<?php echo $dados['id']; ?>" class="btn-floating blue"><i class="material-icons">edit</i></a></td>
                            <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                            <!-- Modal Structure -->
                            <div id="modal<?php echo $dados['id']; ?>" class="modal">
                                <div class="modal-content">
                                    <h4>Opa!</h4>
                                    <p>Tem certeza que quer excluir esse paciente?</p>
                                </div>
                                <div class="modal-footer">

                                    <form action="../php_action/delete-medicos.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                        <button type="submit" name="btn-deletar" class="btn red">Sim, deletar</button>
                                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                    </form>

                                </div>
                            </div>
                        </tr>
                    <?php
                    endwhile;
                else :
                    ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                <?php
                endif;
                ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar-medicos.php" class="btn">ADICIONAR NOVO MÉDICO</a>
    </div>
</div>

<?php
include_once '../includes/footer.php';
?>