window.addEventListener("load", function() {
  //Donde
  var myForm= document.querySelector("form.form-add-product");

  //Cuando
  myForm.onsubmit = function(evento) {
    // Consecuencia
    var errores = [];

    var ul = document.querySelector("div.errores ul");

    ul.innerHTML = "";

    var valorNombre = document.querySelector('input[name="name"]').value;
    var valorStock = document.querySelector('input[name="stock"]').value;

    var elSelect = document.querySelector("form select");
    var respuestaDelSelect = elSelect.options[elSelect.selectedIndex].value;

    console.log(valorNombre, valorStock, respuestaDelSelect);

    if (valorNombre == "") {
      errores.push("Por favor complete el nombre");
    }

    if (valorStock == "") {
      errores.push("Por favor complete el stock");
    } else if (valorStock < 0) {
      errores.push("Ingrese un stock mayor a 0");
    }

    if (errores.length > 0) {
        evento.preventDefault();

        for (var i = 0; i < errores.length; i++) {
          ul.innerHTML += "<li>" + errores[i] + "</li>";
        }
    }
  }


})
