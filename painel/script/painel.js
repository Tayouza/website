let alterRegistrar = document.querySelector('#alterRegistrar');
let voltar = document.querySelector('#voltar');
let formLogin = document.querySelector('.formLogin');
let formRegistro = document.querySelector('.formRegistro');
let registrar = document.querySelector('#registrar');
let regSenha = document.querySelector('#regSenha');
let confRegSenha = document.querySelector('#confRegSenha');
let subLogin = document.querySelector('#subLogin');
let logUser = document.querySelector('#usuario');
let logPass = document.querySelector('#senha');

subLogin.onclick = function (e) {
    if (logUser.value == '' || logPass.value == '') {
        e.preventDefault();
    }
}

alterRegistrar.onclick = function () {
    let notify = document.querySelector('.notify');
    formLogin.style.display = 'none';
    formRegistro.style.display = 'grid';
    if (notify) {
        notify.style.display = 'none';
    }
}

voltar.onclick = function () {
    formRegistro.style.display = 'none';
    formLogin.style.display = 'grid';
}

registrar.onclick = function (e) {
    if (regSenha.value !== confRegSenha.value) {
        e.preventDefault();
        alert('As senhas não conferem!');
    }
    if (regSenha.value === '') {
        e.preventDefault();
    }
}

