window.addEventListener("load", function() {

  fetch("https://api.giphy.com/v1/gifs/random?api_key=lp7wQ6914aPRmDI6HePRPpQeZXyxLFkU&tag=&rating=G")
  .then(function(respuesta) {
    return respuesta.json();
  })
  .then(function(informacion) {
    // ACA SE LABURA

    console.log(informacion.data.image_url);

    document.querySelector("div.gif img").src = informacion.data.image_url;
  });



});
