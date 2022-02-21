<?php
if (isset($_POST['atualizarcargos'])) {
    echo (Painel::alterarCargos($_POST));
    $cargo = Painel::listarCargos($_SESSION['id']);
}
$listarUsuariosOnline = Site::listarUsuariosOnline();
$listarUsuariosCadastrados = Painel::listarUsuariosCadastrados();
$listarCargos = Painel::listarCargos();
?>

<section class="artigo-painel">
    <h2> <i class="bi-file-person"></i> Painel de controle</h2>
    <div class="acessos">
        <div class="box-acesso gold">
            <h5>Usuários online</h5>
            <p><?= count($listarUsuariosOnline); ?></p>
        </div>
        <div class="box-acesso seagreen">
            <h5>Visitas hoje</h5>

        </div>
        <div class="box-acesso tomato">
            <h5>Visitas total</h5>

        </div>
    </div>
</section>
<section class="artigo-painel">
    <h2><i class="bi-person-fill"></i> Usuários online</h2>
    <div class="tabela-painel">
        <table>
            <tr>
                <th>IP</th>
                <th>Última ação</th>
                <th>Navegador usado</th>
            </tr>
            <?php
            for ($i = 0; $i < count($listarUsuariosOnline); $i++) {

                echo '
                    <tr>
                        <td>' . $listarUsuariosOnline[$i]['ip'] . '</td>
                        <td>' . $listarUsuariosOnline[$i]['ultima_acao'] . '</td>
                        <td>' . $listarUsuariosOnline[$i]['navegador'] . '</td>
                    </tr>
                ';
            }
            ?>
        </table>
    </div>
</section>
<?php
if ($cargo === 1) :
?>
    <section class="artigo-painel">
        <h2><i class="bi-person-bounding-box"></i> Usuários cadastrados</h2>
        <form method="POST" class="usuarios-cadastrados">
            <div class="tabela-painel">
                <table>
                    <tr>
                        <th>Usuário</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Cargo</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($listarUsuariosCadastrados); $i++) {
                        echo '
                <tr>
                    <td>' . $listarUsuariosCadastrados[$i]['user'] . '</td>
                    <td>' . $listarUsuariosCadastrados[$i]['nome'] . '</td>
                    <td>' . $listarUsuariosCadastrados[$i]['idade'] . '</td>
                    <td>
                        <div class="field">
                            <select name="' . $listarUsuariosCadastrados[$i]['id'] . '" class="cargo">';

                        for ($index = 0; $index < count($listarCargos); $index++) {
                            if ($listarUsuariosCadastrados[$i]['nome_cargo'] === $listarCargos[$index]['nome_cargo']) {
                                echo '
                                <option value="' . $listarCargos[$index]['id_cargo'] . '" selected>' . ucfirst($listarCargos[$index]['nome_cargo']) . '</option>
                            ';
                            } else {
                                echo '
                                <option value="' . $listarCargos[$index]['id_cargo'] . '">' . ucfirst($listarCargos[$index]['nome_cargo']) . '</option>
                            ';
                            }
                        }

                        echo '                
                            </select>
                        </div>
                    </td>
                </tr>
            ';
                    }
                    ?>
                </table>
            </div>
            <input type="submit" name="atualizarcargos" value="Atualizar cargos" class="btn seagreen center-self">
        </form>
    </section>
<?php
endif;
if ($cargo === 2) :
?>

    <section class="artigo-painel">
        <h2><i class="bi-person-bounding-box"></i> Usuários cadastrados</h2>
            <div class="tabela-painel">
                <table>
                    <tr>
                        <th>Usuário</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Cargo</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($listarUsuariosCadastrados); $i++) {
                        echo '
                            <tr>
                                <td>' . $listarUsuariosCadastrados[$i]['user'] . '</td>
                                <td>' . $listarUsuariosCadastrados[$i]['nome'] . '</td>
                                <td>' . $listarUsuariosCadastrados[$i]['idade'] . '</td>
                                <td>' . $listarUsuariosCadastrados[$i]['nome_cargo'] . '</td>
                            </tr>
                        ';
                    }
                    ?>
                </table>
            </div>
    </section>



<?php
endif;
?>