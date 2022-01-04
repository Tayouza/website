$(function () {

    $('body').on('submit', 'form', function (e) {
        let form = $(this);
        $.ajax({
            beforeSend: function () {
                $('.overlay-loading').fadeIn();
            },
            url: include_path + "apiForm/formulario.php",
            method: "post",
            dataType: "json",
            data: form.serialize()
        }).done(function (data) {
            let span = document.createElement('span');
            if (data.sucesso) {
                for (let i = 0; i < form[0].children.length; i++) {
                    if (form[0][i]) {
                        if (form[0][i].type == 'text' || form[0][i].type == 'email' || form[0][i].type == 'tel' || form[0][i].type == 'textarea') {
                            form[0][i].value = '';
                        }
                    }
                }
                if (sugestoes)
                    sugestoes.style.display = 'none';

                $('.overlay-loading').fadeOut()
                span.classList.add('email-success');
                span.innerText = 'Email enviado!';
                form[0].appendChild(span);
                ocultarAvisoEmail('.email-success');
            } else {
                $('.overlay-loading').fadeOut()
                span.classList.add('email-fail');
                span.innerText = 'Email não enviado!';
                form[0].appendChild(span);
                ocultarAvisoEmail('.email-fail');
            }
        });
        e.preventDefault();
    });
});