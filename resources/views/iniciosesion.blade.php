@extends ('layouts.plantilla')

@section('title')
iniciosesion
@endsection 

@section ('contenido') 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Inicio sesión</title>

</head>
<body>

<form action="#" method="POST" >
    <div id="login-box" class="login-box">
        <h2>Inicio sesión</h2> 

        <div class="form">
            <div > 
               
                <input type="text"  placeholder="Usuario" name="username"> 
            </div>
         <br><br> 
            <div class="item"> 
                
                <input type="password" placeholder="Contraseña" name="password"> 
            </div>

        </div>
    <br><br>
        <button type="submit">Acceder</button>
    </div>
</form>

</body>

<style>



#login-box {
    border: 1px solid white;
    width: 30%;
    height: 50%;
    text-align: center;
    margin: 0 auto;
    margin-top: 15%;
    background: #f1f1f180;
    padding: 20px 50px;
    border-style: solid;
    border-color: black;
}
input{

    text-align: center
}

#footer {
      background-color: #105709;
      position: absolute;
      display: inline-block;
      bottom: 0;
      width: 100%;
      height: 40px;
      color: white;
    }

    a{
        text-decoration: none;
    }
</style>



</html>

@endsection