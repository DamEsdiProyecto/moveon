window.addEventListener("load", function() {
  var database = firebase.database;
  var eventosLista = database().ref('eventoLista');
  eventosLista.on('value', snapshot => {
      let eventos = snapshot.val();
      for(let evento in eventos) {
        var intro=`<ul class="row list-unstyled">`;
                var imagen="img/gris.png";
                var tituloEvento="NOMBRE EVENTO";
                var localidad="Sabadell";
                intro+=` <li class="col-md-3">
                        <div class="circle" style="background-color:#FFCA28"></div>
                        <button type="button"  class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                          <div class="card" id="elem${i}>
        
                              <div class="card-block">
        
                                <h4 class="card-title">${eventos[evento].titulo} ${i+1}</h4>
                                <img class="card-img-top" src=${imagen} alt="Card image cap">
                                <div><span>LOCALIDAD:</span><span>${eventos[evento].lugar}</span></div>
                              </div>
                            </div>
                          </li>`;
              }
              intro+=`</ul>`;
              document.getElementById('tablon').innerHTML=intro;
  })
});

  var intro=`<ul class="row list-unstyled">`;

      for(var i=0;i<20;i++){
        var imagen="img/gris.png";
        var tituloEvento="NOMBRE EVENTO";
        var localidad="Sabadell";
        intro+=` <li class="col-md-3">
                <div class="circle" style="background-color:#FFCA28"></div>
                <button type="button"  class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                  <div class="card" id="elem${i}>

                      <div class="card-block">

                        <h4 class="card-title">${eventos[evento].titulo} ${i+1}</h4>
                        <img class="card-img-top" src=${imagen} alt="Card image cap">
                        <div><span>LOCALIDAD:</span><span>${eventos[evento].lugar}</span></div>
                      </div>
                    </div>
                  </li>`;
      }
      intro+=`</ul>`;
      document.getElementById('tablon').innerHTML=intro;
