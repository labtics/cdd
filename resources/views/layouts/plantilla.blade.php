<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta charset="utf-8">
    <title>@yield('title', 'Inicio') CDD</title>
    
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}">
  <link rel="stylesheet" href="{{asset('css/fondo_pagina.css')}}">
  <link rel="stylesheet" href="{{asset('css/caja_blanca_transparente.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">

  <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">

</head>

<body>
   		<div class="container">
		    <!-- INICIA EL BARNER -->
		   	<img src="{{asset('img/cdd.jpg')}}"  width="1140"  alt="">
				<!-- INICIA EL MENU HORIZONTAL -->
   	    			@include('layouts.menuPrueba') 
					<!-- PERMITE ENVIAR MENSAJES DE INFORMACIÒN AL USUARIO -->
   	    			<div class="jumbotron jumbotron-fluid">
						 <!-- PERMITE INSERTAR CONTENIDO VARIABLE DE CADA PÁGINA-->
						 @yield('contenido')	
					</div>
   	    </div>
	   	<footer class="footer-base panel-footer jumbotron">
        	<font color=#ffffff><center>&copy; 2023 DAMC-UJAT Todos los Derechos Reservados</center></font>
		</footer>
  </body>

</html>