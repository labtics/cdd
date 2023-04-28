@extends ('layouts.plantilla')

<!-- Tienes que llevar la plantilla desde aqui-->
@section('title')
Producción Academica
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
 
 <h2>Producción academica</h2> <!-- Inicia PRODUCCION ACADEMICA--> 
      <br>
    
      <!--en espera de instrucciónes-->
    <h4>Ingrese nombre del evento asistidos</h4>
     <input type="text" id="evento" name="eventosasistidos" placeholder="Ingrese nombre del evento asistidos"  class="form-control">

    <h4>Ingrese la fecha </h4>
      <input type="date" id="Fecha_evento" name="fecha_evento" placeholder="Fecha del evento" class="form-control" >
      
    <h4>Ingrese la fecha </h4>
      <input type="date" id="Fecha_evento" name="fecha_evento" placeholder="Fecha del evento" class="form-control" >
  

    <h4>Ingrese nombre de la institución</h4>
     <input type="text" id="institucion" name="institucion" placeholder="Ingrese nombre de la institución"  class="form-control">


    <h4>Ingrese nombre del evento impartdo</h4>
     <input type="text" id="cedula" name="nombreeventoimpartido" placeholder="Ingrese nombre del evento asistidos" class="form-control">


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

