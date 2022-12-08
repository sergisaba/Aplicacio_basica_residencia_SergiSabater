//login
function login() {

    let user: any = document.getElementById('nombre');
    let contrasenya: any = document.getElementById('pass');
    let btn: any = document.getElementById('blog');

    let mostrar: any = document.getElementById('logm');
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/login.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
      mostrar.innerHTML = this.responseText;
    };
    xhr.send("usuari="+user.value+"&contrasenya="+contrasenya.value+"&blog="+btn.value);
  }
  
  function logout() {
    window.location.href = 'index.php';
    alert("Has tancat sessió");
  }

  function alta(){
  
    let mostrar: any = document.getElementById('mostrar');
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/alta.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
      mostrar.innerHTML = this.responseText;
    };
    xhr.send();
  }

  function altafamilar() {
    var nombre_familiar:any = document.getElementById('nombref');
    var pass_familiar:any = document.getElementById('passf');
    var telef_familiar:any = document.getElementById('telefonof');
    var boton:any = document.getElementById('altafamiliar');
    let mostrar: any = document.getElementById('mostrar');


    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/alta_residente.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
      mostrar.innerHTML = this.responseText;
    };
    xhr.send("nombref="+nombre_familiar.value+"&passf="+pass_familiar.value+"&telef="+telef_familiar.value+"&Baltafamiliar="+boton.value);
  }


function altaresidente() {
    var nombre_r:any = document.getElementById('nombrer');
    var cognom1_r:any = document.getElementById('apellido1');
    var cognom2_r:any = document.getElementById('apellido2');
    var boton:any = document.getElementById('Baltaresidente');
    var lat:any = "2.8415184";
    let long: any = "25.819189";

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/alta_residente.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
      alert("Datos enviados");

    };
    xhr.send("nombre="+nombre_r.value+"&apellido1="+cognom1_r.value+"&apellido2="+cognom2_r.value+"&lat="+lat+"&long="+long+"&Baltaresidente="+boton.value);
}

function mostrartodo(){

  let mostrar: any = document.getElementById('mostrar');

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./php/mostrartodo.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {

    mostrar.innerHTML = this.responseText;

  };
  xhr.send();
}

function enviarmensaje(){
  var usuario:any = document.getElementById('nombre');;
  var asunto:any = document.getElementById('asunto');
  var cuerpo:any = document.getElementById('cuerpo');
  var boton:any = document.getElementById('mensaje');


  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./php/alta_residente.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    alert("Mesaje enviado");
  };
  xhr.send("asunto="+asunto.value+"&cuerpo="+cuerpo.value+"&Bmensaje="+boton.value+"&usuario="+usuario.value);
}