window.addEventListener("load", function() {
  var database = firebase.database;
  var eventosLista = database().ref('eventoLista');

  var ul = document.createElement("ul");
  ul.classList.add("row list-unstyled");

  eventosLista.on('value', snapshot => {
      let eventos = snapshot.val();
      for(let evento in eventos) {

        var li = document.createElement("li");
        li.classList.add("col-md-3");

        var circulo = document.createElement("div");
        circulo.classList.add("circle");
        circulo.style.backgroundColor = "#FFCA28";

        var btncerrar = document.createElement("button");
        btncerrar.type = "button";
        btncerrar.classList.add("close");
        //btncerrar.arial-label = "Close";
        btncerrar.innerHTML = `<span aria-hidden="true">&times;</span>`;

        var card = document.createElement("div");
        card.classList.add("card");
        card.id = `elem${evento}`;

        var cardblock = document.createElement("div");
        cardblock.classList.add("card-block");
        cardblock.innerHTML = `<h4 class="card-title">${eventos[evento].titulo} ${evento}</h4>
        <img class="card-img-top" src=${imagen} alt="Card image cap">
        <div><span>LOCALIDAD:</span><span>${eventos[evento].lugar}</span></div>`

        card.appendChild(cardblock);
        il.appendChild(circulo);
        il.appendChild(btncerrar);
        il.appendChild(card);
        ul.appendChild(il);
      }
});

document.getElementById('tablon').appendChild(ul);
});
