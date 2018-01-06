var evento = {
  titulo: "",
  descripcion: "",
  lugar: "",
  dia: "",
  hora: "",
  precio: "",
  urlLarge : "",
  url: ""
}

function subirEvento() {
  /*console.log(evento);
  var database = firebase.database;
  const eventList = database().ref("eventoLista");
  eventList.push(evento);*/

  evento = {
    titulo: "",
    descripcion: "",
    lugar: "",
    dia: "",
    hora: "",
    precio: "",
    urlLarge : "",
    url: ""
  }
  document.getElementById("crear-evento").reset();
  document.getElementById("item-image").reset();
  console.log(evento);
}

let inputs = document.getElementById("crear-evento");
inputs.addEventListener("change", function (e) {
  evento = {
    ...evento,
    [e.target.name]: e.target.value
  }
})

// subir imagenes
let inputImg = document.getElementById("upload-file-selector");
inputImg.addEventListener("change", function () {
  if(this.files && this.files[0]) {
    var Archivo = new FileReader();
    Archivo.onload = function(e) {
      var ImagenPequenia = reImagen(e.target.result, 165, 165);
      
      evento = {
        ...evento,
          urlLarge : e.target.result,
          url: ImagenPequenia
        }
        document.getElementById("item-image").src = ImagenPequenia;
    }
    Archivo.readAsDataURL(this.files[0]);
  }
});