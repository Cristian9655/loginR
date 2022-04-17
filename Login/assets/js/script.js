document.getElementById("btn__iniciar-login").addEventListener("click", iniciarCadastro);
document.getElementById("btn__cadastro").addEventListener("click", cadastro);
window.addEventListener("resize", paginaAmpla)

//Declaração de variavel

var conteiner_login_cadastro = document.querySelector(".conteiner__login-cadastro");
var formulario_login = document.querySelector(".formulario__login");
var formulario_cadastro = document.querySelector(".formulario__cadastro");
var caixa_traseira_login = document.querySelector(".caixa__traseira-login");
var caixa_traseira_cadastro = document.querySelector(".caixa__traseira-cadastro");

paginaAmpla();

function paginaAmpla(){
    if(window.innerWidth > 850){
        caixa_traseira_login.style.display = "block";
        caixa_traseira_cadastro.style.display = "block";
    }else{
        caixa_traseira_cadastro.style,display = "block";
        caixa_traseira_cadastro.style.opacity = "1";
        caixa_traseira_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_cadastro.style.display = "none";
        conteiner_login_cadastro.style.left = "0px";

    }
}

function iniciarCadastro(){
    if(window.innerWidth > 850){
        formulario_cadastro.style.display = "none";
        conteiner_login_cadastro.style.left = "10px";
        formulario_login.style.display = "block";
        caixa_traseira_cadastro.style.opacity = "1";
        caixa_traseira_login.style.opacity = "0";
    }else{
        formulario_cadastro.style.display = "none";
        conteiner_login_cadastro.style.left = "0px";
        formulario_login.style.display = "block";
        caixa_traseira_cadastro.style.display = "block";
        caixa_traseira_login.style.display = "none";
    }
}
function cadastro(){
    if(window.innerWidth > 850){
        formulario_cadastro.style.display = "block";
        conteiner_login_cadastro.style.left = "410px";
        formulario_login.style.display = "none";
        caixa_traseira_cadastro.style.opacity = "0";
        caixa_traseira_login.style.opacity = "1";
    }else{
        formulario_cadastro.style.display = "block";
        conteiner_login_cadastro.style.left = "0px";
        formulario_login.style.display = "none";
        caixa_traseira_cadastro.style.display = "none";
        caixa_traseira_login.style.display = "block";
        caixa_traseira_login.style.opacity = "1";
    }
}