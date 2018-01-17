<!doctype html>
<html lang="en">
  <head>
    <title>Move On!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/plantilla.css">
    <link rel="stylesheet" href="css/tablon.css">
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-light sticky-top cabecera ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="plantilla.html"><img src="img/icon.jpg" alt="Icono" title="Icono" width="36" height="36"> Move On!</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Crear grup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Crear event</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a href="#" role="button" class="btn btn-primary" id="registrar">Registrarse</a>
            <a href="#" role="button" class="btn btn-primary" id="inicio">Iniciar</a>
          </form>
        </div>
      </nav>

      <div class="container-fluid">
      <div class="row">

          <nav class="col-md-3">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <FONT SIZE=30><a href="grupo.php">DAM</a></FONT>
              </li>
              <li class="nav-item">
                <button name="ejercicio1" class="button" onclick="cambio(1);">Información</button>
              </li>
              <li class="nav-item">
                <button name="ejercicio1" onclick="cambio(2);">Miembros</button>
              </li>
              <li class="nav-item">
                <button name="ejercicio1" onclick="cambio(3);">Fotos</button>
              </li>
              <li class="nav-item">
                <a>Organizadores:</a></br></br></br>
              </li>
            </ul>
            <h3 style="font-style: oblique;">Eventos</h3>
              <div role="main" id="tablon">
                    <script src="js/cargar.js"></script>
              </div>
          </nav>

              <div class="col-md-9">
                <section class="row text-center placeholders">
                  <div class="col-12 col-sm-100 placeholder">
                    <img src="https://educacionenlinea.org/wp-content/uploads/2016/11/programacion-informatica.png" width="1000" height="250" alt="Generic placeholder thumbnail"></br></br>
                    <div id="muro">
                          <div id="contenido">        
                                      <form action="comentari.php" method="post">
                                      <textarea id="comentari" class="form-control" name="comentari" cols="1000" rows="5"  aria-required="true"></textarea>
                                      <input type="submit" value="Comentar" id="boton" />
                                      </form></br>
                                      <?php include 'data.data';  ?> 
                         </div>    
                    </div>
                  </div>

                </section>
              </div>

          </div>

        </div>
        <footer>
          <div class="container-fluid bg-primary py-3">
         <div class="container">
           <div class="row">
             <div class="col-md-10">
                 <div class="row py-0">
               <div class="col-sm-1 hidden-md-down">
                   <a class="bg-circle bg-info" href="#">
                     <img src="img/contact.png" alt="" height="36" width="36">
                   </a>
                 </div>
                 <div class="col-sm-11 text-white">
                     <div><h4>Contact</h4>
                         <p><span class="header-font">M</span>ove<span class="header-font">O</span>n.com</p>
                     </div>
                 </div>
                 </div>
             </div>
             <div class="col-md-2">
               <div class="d-inline-block">
                  <a href="https://www.facebook.com/"><img src="img/facebook.png" alt="Facebook" title="Facebook" height="36" width="36"></a>
                  <a href="https://twitter.com/"><img src="img/twitter.png" alt="Twitter" title="Twitter" height="36" width="36"></a>
                  <a href="https://github.com/DamEsdiProyecto/moveon"><img src="img/github.png" alt="GitHub" title="GitHub" height="36" width="36"></a>
                  <a href="https://www.google.es/"><img src="img/google.png" alt="Google+" title="Google+" height="36" width="36"></a>
               </div>
             </div>
           </div>
           <p class="text-center"> Copyright © Move On website 2017. All right reserved. </p>
         </div>
         </div>
         <div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-labelledby="modalProfile" aria-hidden="true">
       			<div class="modal-dialog modal-lg">
       				<div class="modal-content">
       					<div class="modal-header">

       						<h3 class="modal-title"></h3>
       					</div>
       					<div class="modal-body">
       					</div>
       					<div class="modal-footer">
       					</div>
       				</div>
       			</div>
       		</div>
     </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script>
        $('.close').click(function(){
          var $target = $(this).parents('li');
          $target.hide('slow', function(){ $target.remove();});
        })
        $('div.card').click(function(event){
        event.preventDefault();
        var content = $('.modal-body');
        content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
        });

        function cambio(numero){
            if(numero==1){
                document.getElementById("contenido").innerHTML = 
                "<h3>Hola</h3><p>También puede insertar HTML en sus elementos de la misma manera. Digamos que no nos gustó el texto que se mostró en nuestro párrafo y queríamos actualizarlo con un poco de color. El siguiente código tomará el texto negro antiguo y lo convertirá en blanco brillante. Lo único que estamos haciendo diferente aquí es insertar el tramo del elemento html para cambiar el color.</p>";
            }
            if(numero==2){
                 document.getElementById("contenido").innerHTML =
                 "<h3>No hay miembros</h3>";
            }
            if(numero==3){
                document.getElementById("contenido").innerHTML =
                 "<h3>No hay fotos</h3>";            }

        }

    </script>
  </body>
</html>
