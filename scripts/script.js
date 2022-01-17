const include_path = 'http://localhost/aulasphp/';

function ocultarAvisoEmail(classe) {
    let aviso = document.querySelector(classe);
    console.log(aviso);
    if (aviso != null) {
        let timeout = setTimeout(function () {
            aviso.animate({
                opacity: 0
            }, 1000);
            //aviso.style.display = 'none';
            aviso.remove();
        }, 1000);
    }
}

let split;
let inputEmailHome = document.getElementById('email');
let sugestoes = document.getElementById('sugestoes');
if (inputEmailHome) {
    inputEmailHome.onkeyup = function () {
        let nomeFiltro = inputEmailHome.value;
        split = nomeFiltro.split('@');
        if (split.length >= 2) {
            sugestoes.style.display = 'grid';
            sugestoes.innerHTML = `
        <span>${split[0]}@gmail.com</span>
        <span>${split[0]}@hotmail.com</span>
        <span>${split[0]}@yahoo.com.br</span>
        <span>${split[0]}@outlook.com</span>
        `
            let spans = document.querySelectorAll('#sugestoes span');
            addFinalEmail(spans);
        } else {
            sugestoes.style.display = 'none';
        }

    };
}

function addFinalEmail(element) {
    for (child of element) {
        child.onclick = function () {
            inputEmailHome.value = this.innerText;
        }
    }
}

let inputTel = $('#tel');
inputTel.mask('(99)99999-9999');

let mensagem = document.querySelector('[name="mensagem"]');
let contador = document.querySelector('.contador');

function textareaHeight() {
    if (mensagem.scrollHeight > mensagem.offsetHeight) mensagem.rows += 1;
}

function resetHeight() {
    if (mensagem.value == '') mensagem.rows = 1;
}

function contadorChar() {
    let char = mensagem.value.split('');
    contador.innerText = `${char.length}/300`;
    if (char.length >= 300) {
        contador.style.color = '#f44';
    } else {
        contador.style.color = '#888'
    }
}

let inputNome, inputMailContato;

function validarNome() {
    inputNome = document.querySelector('[name="nome"]');
    let verificar = inputNome.value.split(' ');
    if (verificar.length >= 2 && verificar[1] != '') {
        inputNome.style.border = '2px solid #8c4';
        inputNome.validar = false;
    } else {
        inputNome.style.border = '2px solid #c44';
        inputNome.validar = true;
    }
}

function validarMail() {
    inputMailContato = document.querySelector('[name="email"]');
    let verificar = inputMailContato.value.split('@');
    if (verificar.length >= 2 && verificar[1] != '') {
        inputMailContato.style.border = '2px solid #8c4';
        inputMailContato.validar = false;
    } else {
        inputMailContato.style.border = '2px solid #c44';
        inputMailContato.validar = true;
    }
}

function validarTel() {
    if (inputTel[0].value.length == 14) {
        inputTel[0].style.border = '2px solid #8c4';
        inputTel[0].validar = false;
    } else {
        inputTel[0].style.border = '2px solid #c44';
        inputTel[0].validar = true;
    }
}

if (document.querySelector('[name="submit"]')) {
    let enviar = document.querySelector('[name="submit"]');
    try {
        enviar.onclick = function (e) {
            if (inputNome.validar || inputMailContato.validar || inputTel[0].validar) {
                e.preventDefault();
                if (inputNome.validar) {
                    infoErro(inputNome);
                } else if (inputMailContato.validar) {
                    infoErro(inputMailContato);
                } else if (inputTel[0].validar) {
                    infoErro(inputTel[0]);
                }
            }
            ocultarInfoErro();
        }
    } catch (e) { }
}

function infoErro(input) {
    let divParent = input.parentElement;
    let span = document.createElement('span');
    span.classList.add('info-erro');
    span.innerText = 'Preencha este campo corretamente';
    divParent.appendChild(span);
}

function ocultarInfoErro() {
    let inputs = document.querySelectorAll('.input');
    let span = document.querySelectorAll('.info-erro');
    for (el of inputs) {
        el.onclick = function () {
            for (el of span) {
                if (el.parentElement) {
                    el.parentElement.removeChild(el);
                }
            }
        }
    }
}