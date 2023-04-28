@extends ('layouts.plantilla')

<!-- Tienes que llevar la plantilla desde aqui-->
@section('title')
Inicio
@endsection 

@section('contenido') 

    <style type="text/css" media="screen">
    .caja {
        font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
        color: #ffffff;
        font-size: 0px;
        font-weight: 200;
        text-align: center;
        background: #337AB7;
        margin: 0 0 25px;
        overflow: hidden;
        padding: 0px;
        border-radius: 30px 30px 30px 30px;
        -moz-border-radius: 30px 30px 30px 30px;
        -webkit-border-radius: 30px 30px 30px 30px;
        border: 2px solid #337AB7;
    }

    .centrado{
        width: 110px;
        margin-left: 50%;
        transform: translateX(-50%) ;
        padding: 5%;
        align-items:left;
    }

    .editar{
        width: 100px;
        margin-left: 4%;
        transform: translateX(-50%) ;
        padding: 5%;

    }

    .space {
      border-collapse: separate;
      border-spacing: 10px 8px;
     text-align: center;
      padding: 10px;
      text-align: left;
      width: 100%;
      height: auto;
}

   

    </style> 

    <style>

a:table{
  outline: none;
  text-decoration: #8B1874;
  padding: 2px 1px 0;
  background-color: #ffffff;
  color: #337AB7;
 
  
}

    </style>
    <link rel="stylesheet" href="{{asset('css/tabs_modalidades.css')}}">


 <form action="{{ route('registrar')}}" method="post" >

 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Campo</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Datos Generales</td>
      <td><a id="table" href="DatosGenerales"> Abrir</a>
    </td>
   
  </tbody>
  <tbody>
    <tr>
      <th scope="row">2</th>
      <td>Datos Domiciliarios</td>
      <td><a id="table" href="DatosDomiciliarios"> Abrir</a>
    </td>
   
  </tbody>
  <tbody>
    <tr>
      <th scope="row">3</th>
      <td>Datos de Otra Dependencia</td>
      <td><a id="table" href="DatosDeOtraDependencia"> Abrir</a>
    </td>
   
  </tbody>
  <tbody>
    <tr>
      <th scope="row">4</th>
      <td>Producción Academica</td>
      <td><a id="table" href="DatosAcademicos"> Abrir</a>
    </td>
   
  </tbody>
  <tbody>
    <tr>
      <th scope="row">5</th>
      <td>Datos Medicos</td>
      <td><a id="table" href="DatosMedicos"> Abrir</a>
    </td>
   
  </tbody>
 
  
</table>

@endsection 

