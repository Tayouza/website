<h2> <i class="bi-file-person"></i> Dados Pessoais</h2>
<section class="artigo-painel dados-pessoais">
    <table>

        <?php
        $dados = Painel::getDadosPessoais($_SESSION['id']);
        if (!empty($dados['nome'])) {
            extract($dados);

            echo '<tr>
                    <td>Nome: </td>
                    <td>' . $nome . '
                </tr>
                <tr>
                    <td>Idade: </td>
                    <td>' . $idade . '
                </tr>
                <tr>
                    <td>Cargo: </td>
                    <td>' . ucfirst($nome_cargo) . '
                </tr>';
        }else{
            echo '<h4>Adicione seus dados</h4>';
        }
        ?>

    </table>
    <a href="?route=editar-dados" class="btn tomato"><?php echo !empty($dados['nome']) ? 'Editar' : 'Adicionar' ?></a>
</section>