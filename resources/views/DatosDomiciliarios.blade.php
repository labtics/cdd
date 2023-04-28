@extends ('layouts.plantilla')

<!-- Tienes que llevar la plantilla desde aqui-->
@section('title')
Datos Domiciliarios
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
    </style> 
    <link rel="stylesheet" href="{{asset('css/tabs_modalidades.css')}}">


 <form action="{{ route('registrar')}}" method="post" >
 
      <h2>Datos Domiciliarios</h2> <!-- Inicia DATOS DOMICILIARIOS--> 
    
      <h4>Selecione su nacionalidad </h4>
   
    <select name="nacionalidad" id="nacionalidad" >
      
       <option value="mexicano">Mexicano(a)</option> 

       <option value="extranjero">Extranjero(a)</option>
    </select>  
     <p></p> 
    <input type="text" id="tiponacionalidad" placeholder="Escriba su nacionalidad" class="form-control"> 

    <h4>Seleccione su estado</h4>
    <select name="estado" id="estado" >
        <option value=""> Selecciona tu estado</option>
    </select>

    <h4>Seleccione su municipio</h4>
      <select name="municipio" id="municipio">
        <option value=""> Selecciona tu municipio</option>
      </select>

    <h4>Ingresa tu calle</h4>
      <input type="text" id="calle" placeholder="Ingrese su calle"  class="form-control">

    <h4>Ingresa tu colonia</h4>
      <input type="text" id="colonia" placeholder="Ingrese su colonia" class="form-control">

      <h4>Ingresa tu codigo postal</h4>
      <input type="number" id="cp" placeholder="Ingrese su codigo postal"  class="form-control">

    <h4>Ingresa tu número interior o exterior</h4>
      <input type="number" id="numerointerior" placeholder="Ingrese su número interior o exterior"  class="form-control">

        <div class="centrado">

      <table>
     <tr>
        <th> 
          <a href="{{URL::previous ()}}">
         <button type="button" class="btn btn-secondary">Regresar</button>
           </a>
        </th>
        <th>
         
          <a href=""  id="guardargenerales" value="Guardar">
            <button type="button" class="btn btn-success">Guardar</button>
        
          </a>
        </th>
     </tr>

     </table>
    </div>
    </section>
      <section id="dunkles" class="tab-panel" >
      

@endsection 

