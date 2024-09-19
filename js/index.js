function datos() {
  var panel = document.getElementById('datos');
  var input = document.querySelectorAll('input');
  if (verificarDatos()) {
    panel.innerHTML = `
      <img src="./img/login.png" width="50%">
      <h3>Una experiencia musical te espera...</h3>
    `
    input.forEach(element => {
      if (element.type != "password" && !element.classList.contains("log")) {
        panel.innerHTML += `
          <p>${element.value}</p>
        `
        // panel.appendChild();
      }
      else if(!element.classList.contains("log")) {
        panel.innerHTML += `
          <p>&squf;&squf;&squf;&squf;&squf;&squf;&squf;&squf;</p>
        `
      }

    });

    var cambiarboton = document.getElementById('botonC');
    cambiarboton.classList.remove('hide');
  }
  else {
    console.log("datos vacios");
  }
}

function verificarDatos() {
  var aux = true;
  var input = document.querySelectorAll('input');
  input.forEach(element => {

    if (element.classList.contains("error")) {
      element.classList.remove("error");
    }

    switch (element.name && !element.classList.contains("log")) {
      case 'password':
        console.log(element.value);
        if (element.value.length < 8 || element.value == "") {
          element.classList.add("error");
          aux = false;
        }
        break;

      case 'email':
        console.log(element.value);
        if (!element.checkValidity() || element.value == "") {
          element.classList.add("error");
          aux = false;
        }
        break;

      case 'nombre':
        console.log(element.value);
        const expresionRegular = /\d+/;
        if (expresionRegular.test(element.value) || element.value == "" || element.value.length > 45) {
          element.classList.add("error");
          aux = false;
        }
        break;

      case 'usuario':
        console.log(element.value);
        if (element.value == "" || element.value.length > 25) {
          element.classList.add("error");
          aux = false;
        }
        break;
      default:
        break;
    }

  });

  return aux;
}