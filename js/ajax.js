"use strict";
//login
function login() {
    let user = document.getElementById('nombre');
    let contrasenya = document.getElementById('pass');
    let btn = document.getElementById('blog');
    let mostrar = document.getElementById('logm');
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/login.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        mostrar.innerHTML = this.responseText;
    };
    xhr.send("usuari=" + user.value + "&contrasenya=" + contrasenya.value + "&blog=" + btn.value);
}
function logout() {
    window.location.href = 'index.php';
    alert("Has tancat sessió");
}
function alta() {
    let mostrar = document.getElementById('mostrar');
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/alta.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        mostrar.innerHTML = this.responseText;
    };
    xhr.send();
}
function altafamilar() {
    var nombre_familiar = document.getElementById('nombref');
    var pass_familiar = document.getElementById('passf');
    var telef_familiar = document.getElementById('telefonof');
    var boton = document.getElementById('altafamiliar');
    let mostrar = document.getElementById('mostrar');
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/alta_residente.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        mostrar.innerHTML = this.responseText;
    };
    xhr.send("nombref=" + nombre_familiar.value + "&passf=" + pass_familiar.value + "&telef=" + telef_familiar.value + "&Baltafamiliar=" + boton.value);
}
function altaresidente() {
    var nombre_r = document.getElementById('nombrer');
    var cognom1_r = document.getElementById('apellido1');
    var cognom2_r = document.getElementById('apellido2');
    var boton = document.getElementById('Baltaresidente');
    var lat = "2.8415184";
    let long = "25.819189";
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/alta_residente.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        alert("Datos enviados");
    };
    xhr.send("nombre=" + nombre_r.value + "&apellido1=" + cognom1_r.value + "&apellido2=" + cognom2_r.value + "&lat=" + lat + "&long=" + long + "&Baltaresidente=" + boton.value);
}
function mostrartodo() {
    let mostrar = document.getElementById('mostrar');
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/mostrartodo.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        mostrar.innerHTML = this.responseText;
    };
    xhr.send();
}
function enviarmensaje() {
    var usuario = document.getElementById('nombre');
    ;
    var asunto = document.getElementById('asunto');
    var cuerpo = document.getElementById('cuerpo');
    var boton = document.getElementById('mensaje');
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/alta_residente.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        alert("Mesaje enviado");
    };
    xhr.send("asunto=" + asunto.value + "&cuerpo=" + cuerpo.value + "&Bmensaje=" + boton.value + "&usuario=" + usuario.value);
}
