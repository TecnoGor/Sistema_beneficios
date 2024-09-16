<?php
  session_start();

  if (!empty($_SESSION['active'])) {
    header('Location: admin/php/system.php');
  } else if (!empty($_SESSION['activeP'])) {
    header('Location: profesor/');
  }

?>

<!-- Prueba de comentario para git -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">  
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Inicio De Sesion</title>
</head>
<!-- <body> -->
	<!-- <header class="header">
		<div class="image-container">
			<img class="image_full-size" src="images/membrete_universidad.jpeg">
		</div>
	</header>
	<div class="flex-container">

		<div class="side_left">
				
			<form action="php/sign.php" method="POST" class="sign_form">

				<h1>
					INICIO DE SESION
				</h1>
				
				<input type="text" name="usr" placeholder="Ingrese su usuario" class="input_inf"><br>

				<input type="password" name="passwd" placeholder="Ingrese su contraseña" class="input_inf"><br>

				<input type="submit" name="snd" value="Iniciar Sesion"><br>

			</form>

			
		</div>
		
		<div class="side_right">

			<div class="box_side_right">
				
			</div>
			
		</div>

		<footer class="footer">
			<h1>
				
			</h1>
		</footer>

	</div> -->
<body class="full-bg">

  <div id="fondos">

    <div class="cajafuera" align="center">

      <div class="formulariocaja">

        <form method="post" action="" onsubmit="return validar()">

          <div class="formtitulo">C.C. "Unión la cauchera"</div>

          <div class="formtitulo">Iniciar sesión</div>

          <img src="images/logo4.png"/>

          <div id="msjAdmin"></div>

          <div align="left" class="textoscajas">&#128273; Usuario: </div>

          <input type="text" id="user" name="usr" class="cajaentradatexto">

          <div align="left" class="passwd">&#128274; Contraseña: </div>

          <input type="password" id="password" name="passwd"class="cajaentradatexto">

          <!-- <div align="right" class="af"><a href="#">Recuperar contraseña</a></div> -->

          <button class="btn btn-primary btn-block" id="loginAdmin" type="button"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>INICIAR SESION</button>

        </form>

      </div>

    </div>

  </div>


  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/login.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>    
  <script>
    $( document ).ready(function() {
        var arr = ['images/img1.jpeg','images/img2.jpeg','images/img3.jpeg','images/img4.jpeg'];
        
        var i = 0;
        setInterval(function(){
            if(i == arr.length - 1){
                i = 0;
            }else{
                i++;
            }
            var img = 'url('+arr[i]+')';
            $(".full-bg").css('background-image',img); 
         
        }, 4000)

    });
	</script>

	
</body>
</html>


