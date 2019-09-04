window.addEventListener("load", function() {

  var mySearch = document.querySelector("input.search");

  mySearch.onkeyup = function() {
    var search = mySearch.value;
    document.querySelector("div.results ul").innerHTML = "";

    if (search.length < 3) {
      document.querySelector("div.jumbotron p").style.display = "block";
    } else {
      document.querySelector("div.jumbotron p").style.display = "none";

      fetch("/api/search?search=" + search)
      .then(function(respuesta) {
        return respuesta.json();
      })
      .then(function(productos) {
        // ACA SE LABURA

        for (var i = 0; i < productos.length; i++) {
          document.querySelector("div.results ul").innerHTML += "<li><a href='/product/" + productos[i].id + "'>" + productos[i].name + "</a></li>";
        }
      });
    }
  }

});
