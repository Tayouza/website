<div class="contato">
    <form method="POST" action="">
        <div class="input">
            <input type="text" name="nome" placeholder="Nome completo..." onblur="validarNome()" onkeyup="validarNome()" required>
        </div>
        <div class="input">
            <input type="email" name="email" onblur="validarMail()" onkeyup="validarMail()" placeholder="Email..." required>
        </div>
        <div class="input">
            <input type="tel" name="tel" id="tel" onblur="validarTel()" onkeyup="validarTel()" placeholder="Telefone..." required>
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