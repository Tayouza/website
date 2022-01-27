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


alterRegistrar.onclick = function () {
    let notify = document.querySelector('.notify');
    formLogin.style.display = 'none';
    formRegistro.style.display = 'grid';
    if (notify) {
        notify.style.display = 'none';
    }
    regUsuario.focus();
}

voltar.onclick = function () {
    formRegistro.style.display = 'none';
    formLogin.style.display = 'grid';
    logUser.focus();
}

registrar.onclick = function (e) {
    let regex = new RegExp('^@|[^A-Za-z0-9._]+$');
    if (regSenha.value !== confRegSenha.value) {
        e.preventDefault();
        alert('As senhas não conferem!');
    }
    if(regUsuario.value.split(regex).length > 1){
        e.preventDefault();
    }
}

