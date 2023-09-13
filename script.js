


const button = document.querySelector('.button')
const nav    = document.querySelector('.nav')



  function redirigir()
  {
    window.location.href="Login.html";
  }

  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("submit").addEventListener("click", function() {
      // Código para establecer el contenido HTML del elemento
      document.getElementById("mensaje-confirmacion").innerHTML = "El usuario ya existe en la base de datos.";
    });
  });

  console.log("Se ejecuto el codigo JavaScript.");