<?php
$listarUsuariosOnline = Site::listarUsuariosOnline();
$listarUsuariosCadastrados = Painel::listarUsuariosCadastrados();
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
<?php if($_SESSION['cargo'] === 1 || $_SESSION['cargo'] === 2){
    echo '
            <section class="artigo-painel">
                <h2><i class="bi-person-bounding-box"></i> Usuários cadastrados</h2>
                <div class="tabela-painel">
                    <table>
                        <tr>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Cargo</th>
                        </tr>
            ';
            for ($i = 0; $i < count($listarUsuariosCadastrados); $i++) {
                echo '
                <tr>
                    <td>' . $listarUsuariosCadastrados[$i]['nome'] . '</td>
                    <td>' . $listarUsuariosCadastrados[$i]['idade'] . '</td>
                    <td>' . $listarUsuariosCadastrados[$i]['nome_cargo'] . '</td>
                </tr>
            ';
            }
            echo '
                    </table>
                </div>
            </section>
                    ';
        }
        ?>