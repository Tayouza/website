<div class="contato">
    <form method="POST" action="">
        <div class="field">
            <input type="text" name="nome" onblur="validarNome()" onkeyup="validarNome()" required>
            <label for="nome" title="Nome Completo" data-title="Nome Completo"></label>
        </div>
        <div class="field">
            <input type="text" name="email" id="email-contato" onblur="validarMail()" onkeyup="validarMail()" required>
            <label for="email" title="Email" data-title="Email"></label>
        </div>
        <div class="field">
            <input type="tel" name="tel" id="tel" onblur="validarTel()" onkeyup="validarTel()" required>
            <label for="tel" title="Telefone" data-title="Telefone"></label>
        </div>
        <div class="mensagem">
            <textarea name="mensagem" maxlength="300" placeholder="Digite sua mensagem..." rows="1" onkeyup="resetHeight(); contadorChar();" oninput="textareaHeight()" required></textarea>
            <span class="contador">0/300</span>
        </div>
        <input type="submit" name="submit" value="Enviar">
    </form>
</div>

<div class="map">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=13RuGactDVNYjvohhujXAuu64Z8Jh3Fr1"></iframe>
</div>