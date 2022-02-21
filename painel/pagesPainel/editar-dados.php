<?php
if (isset($_POST['nome']) || isset($_POST['idade'])){
    echo (Painel::alterarDadosPessoais($_POST, $_SESSION['id']));
}
$dados = Painel::getDadosPessoais($_SESSION['id']);
if (!empty($dados))
    extract($dados);
$nome = $nome ?? '';
$idade = $idade ?? '';
$_SESSION['nome'] = $nome ?? '';
?>

<section class="artigo-painel editar-dados white">
    <form method="POST">
        <div class="field-wrap">
            <div class="field">
                <input type="text" name="nome" id="nome" value="<?= $nome ?>" autocomplete="off" required>
                <label for="nome" title="Nome Completo" data-title="Seu nome completo"></label>
            </div>
            <div class="field">
                <select name="idade" id="idade" class="white">
                    <?php
                    echo '<option value="' . $idade . '">' . $idade . '</option>';
                    for ($i = 18; $i < 100; $i++) {
                        echo '<option value"' . $i . '">' . $i . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="btns">
            <a href="<?= INCLUDE_PATH_PAINEL ?>main?route=dados-pessoais" class="btn gold">Voltar</a>
            <input type="submit" value="<?php echo !empty($nome) ? 'Alterar' : 'Adicionar' ?>" class="btn seagreen">
        </div>
    </form>
</section>