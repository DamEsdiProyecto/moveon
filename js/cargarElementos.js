
  var intro=`<ul class="row list-unstyled">`;

      for(var i=0;i<20;i++){
        var imagen="img/gris.png";
        var tituloEvento="NOMBRE EVENTO";
        var localidad="Sabadell";
        var precio=0;
        intro+=` <li class="col-md-3">
                <div class="circle" style="background-color:#FFCA28"></div>
                <button type="button"  class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                  <div class="card" id="elem${i}>

                      <div class="card-block">

                        <h4 class="card-title">${tituloEvento} ${i+1}</h4>
                        <img class="card-img-top" src=${imagen} alt="Card image cap">
                        <div><span>LOCALIDAD:</span><span>${localidad}</span></div>
                      </div>
                    </div>
                    <div class="precio"> ${precio} € </div>
                  </li>`;
      }
      intro+=`</ul>`;
      document.getElementById('tablon').innerHTML=intro;
