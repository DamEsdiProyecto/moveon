
var intro;
  for(var i=0;i<6;i++){
    intro+=`<div class='row' id="fila${i}">`;
    for(var j=0;j<4;j++){
      var imagen="img/gris.png";
      var tituloEvento="NOMBRE EVENTO";
      var descripcion="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae sapien tristique, semper massa sit amet, facilisis libero. Nulla porta massa sit amet nisl ultricies, vel interdum ex posuere. Mauris a dui suscipit, efficitur sem et, rhoncus tellus. Curabitur et lacus semper, euismod neque vel, volutpat mauris. Fusce enim urna, suscipit sit amet lacinia non, scelerisque blandit nibh. Etiam nisl tellus, ornare at consequat ac, condimentum eu felis. Vivamus sollicitudin mauris venenatis ante aliquet, ut laoreet metus tempor.";
      intro+=`<div class="col-sm-3">
                  <div class="card" id="fila${i}columna${j}">
                    <div class="card-block">
                      <h3 class="card-title">${tituloEvento}</h3>
                      <img class="card-img-top" src=${imagen} alt="Card image cap">
                      <p class="card-text">${descripcion}</p>
                    </div>
                  </div>
                </div>`;
    }
    intro+=`</div>`;
  }
    document.getElementById('tablon').innerHTML=intro;
