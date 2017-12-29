<!doctype html>
<html lang="en">
  <head>
    <title>Move On!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/evento.css">
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

		<div role="main">
	  
			<h1 class="center">Titul</h1>

			
			<input value="Asistir" type="button"/>
			<input value="No Asistir" type="button" disabled="false" />
			<div class="descripcio">
				El FC Barcelona quiere que el central que sustituya a Javier Mascherano llegue al Camp Nou cuanto antes una vez se cierre el mercado invernal 
				el 1 de enero para facilitar su adaptación al equipo de Ernesto Valverde.Como ha ido informando Mundo Deportivo, el mejor situado es Yerry Mina,
				central colombiano del Palmeiras, por quien el Barça tiene una opción de compra para el verano valorada en nueve millones de euros. Para este 
				mercado invernal habría que pagar algo más.El Barça ha estado rastreando el mercado europeo en busca de un central experimentado que pudiera 
				resultar barato pero de momento no ha encontrado nada con calidad para jugar en el Camp Nou, por lo que Mina aparece como la opción más consistente 
				para reforzar la zaga.
			</div>
			<div class="muro">
			
			<?php include("data.data"); ?>
			
			<form action="comentari.php" method="post">
			<textarea id="comentari" class="form-control" name="comentari" cols="30" rows="5"  aria-required="true"></textarea>
			<input type="submit" value="comentar"/>
			</form>
			
		
			</div>
			<div class="lat">
				<div class="center">
					dd/mm/yy<br>
					Barcelona
				</div>
					
				<div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2985.681571516558!2d2.0830828150879297!3d41.55449137924915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a49492db94a0d5%3A0xf6b09f7633896fd5!2sCarrer+de+Juvenal%2C+1%2C+08206+Sabadell%2C+Barcelona!5e0!3m2!1ses!2ses!4v1488931262202" 
					height="250" width="250"></iframe>		
				</div>
				
				<div>
				<img src="img/contact.png" alt="creador" height="42" width="42"> Creador
				</div>
			</div>	

			<div class="asis">
				<img src="img/contact.png" alt="a1" height="42" width="42"> Asisent 1
				<img src="img/contact.png" alt="a2" height="42" width="42"> Asisent 2 <br>
				<img src="img/contact.png" alt="a3" height="42" width="42"> Asisent 3
				<img src="img/contact.png" alt="a4" height="42" width="42"> Asisent 4
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
		
     </footer>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>