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
    <div id="login-box" >
        <h1>Inicio sesión</h1> 

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

#t1{
    width: 100%;
    border: 15px;
    color: #fffeff;
height: 90%;
    background-color: #105709;
    }

    a.a1{
        color: #fffeff;
    }

  
    .slider-container {
  display: flex;
  width: 100%;
  height: 80vh;
  overflow-x:scroll;
  scroll-snap-type: x mandatory;
}

#login-box {
    border: 1px solid white;
    width: 30%;
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