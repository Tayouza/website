let alterRegistrar = document.querySelector('#alterRegistrar');
let voltar = document.querySelector('#voltar');
let formLogin = document.querySelector('.formLogin');
let formRegistro = document.querySelector('.formRegistro');
let registrar = document.querySelector('#registrar');
let regUsuario = document.querySelector('#regUsuario');
let regSenha = document.querySelector('#regSenha');
let confRegSenha = document.querySelector('#confRegSenha');
let subLogin = document.querySelector('#subLogin');
let logUser = document.querySelector('#usuario');
let logPass = document.querySelector('#senha');
let aside = $('aside');
let main = $('main');

$('.drag').draggable();

if (alterRegistrar) {
    alterRegistrar.onclick = function () {
        let notify = document.querySelector('.notify');
        formLogin.style.display = 'none';
        formRegistro.style.display = 'grid';
        if (notify) {
            notify.style.display = 'none';
        }
        regUsuario.focus();
    }
}

if (voltar) {
    voltar.onclick = function () {
        formRegistro.style.display = 'none';
        formLogin.style.display = 'grid';
        logUser.focus();
    }
}

if (registrar) {
    registrar.onclick = function (e) {
        let regex = new RegExp('^@|[^A-Za-z0-9._]+$');
        if (regSenha.value !== confRegSenha.value) {
            e.preventDefault();
            alert('As senhas não conferem!');
        }
        if (regUsuario.value.split(regex).length > 1) {
            e.preventDefault();
        }
    }
}


$('#openClose').click(function () {
    if (aside.css('left') !== "0px" && window.innerWidth > 768) {
        aside.animate({
            'left': '0px'
        });
        setTimeout(function () {
            main.css('width', "calc(100% - 250px)");
        }, 370);
    } else if (aside.css('left') === '0px') {
        aside.animate({
            'left': '-230px'
        });
        main.css('width', "calc(100% - 20px)");
    } else if (aside.css('left') !== '0px' && window.innerWidth < 768) {
        aside.animate({
            'left': '0px'
        });
    }
});

$('.conteudo').click(function () {
    if (aside.css('left') === '0px') {
        aside.animate({
            'left': '-230px'
        });
        main.css('width', "calc(100% - 20px)");
    }
});


function revelarSenha(iconVisivel, iconInvisivel, input) {
    let passVisivel = $(iconVisivel);
    let passInvisivel = $(iconInvisivel);
    let inputSenha = $(input);

    if (inputSenha.attr('type') === 'password') {
        inputSenha.attr('type', 'text');
        passVisivel.fadeOut();
        passInvisivel.fadeIn();
    } else {
        inputSenha.attr('type', 'password');
        passInvisivel.fadeOut();
        passVisivel.fadeIn();
    }
}

$('.pass-login').click(function () {
    revelarSenha('.pass-login-visivel', '.pass-login-invisivel', '#senha');
});

$('.pass-registro').click(function () {
    revelarSenha('.pass-registro-visivel', '.pass-registro-invisivel', '#regSenha');
});

$('.pass-confRegistro').click(function () {
    revelarSenha('.pass-confRegistro-visivel', '.pass-confRegistro-invisivel', '#confRegSenha')
});

