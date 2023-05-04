@extends ('layouts.plantilla')

<!-- Tienes que llevar la plantilla desde aqui-->
@section('title')
Datos Academicos
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


 <form action="{{ route('docente.storeAcademicos')}}" method="post" >
 
 <h2> Datos Academicos</h2> <!-- Inicia DATOS ACADEMICOS--> 
    <br>

 <div class="col-md-4">
        <div class="form-group">
    <h4>Ingrese su grado academico</h4>
     <input type="text" id="grado_academico" name="grado_academico" placeholder="Ingrese su grado academico" class="form-control">

  </div>
 </div>
    

 <div class="col-md-4">
        <div class="form-group">
      <h4>Ingrese título</h4>
     <input type="text" id="titulo" name="titulo" placeholder="Ingrese su titulo" class="form-control">


        </div>
 </div>



 <div class="col-md-4">
        <div class="form-group">
    <h4>Ingrese su cedula</h4>
     <input type="text" id="cedula" name="cedula" placeholder="Ingrese su cedula" class="form-control">
        </div>
 </div>

       

      <div class="col-md-4">
          <div class="form-groud">
      <h4>Marca tu status</h4>
        <input type="checkbox" id="estatus" name="estatus" >
        <label for="scales">En proceso</label>
        
        <input type="checkbox" id="estatus" name="estatus">
        <label for="scales">Finalizado</label>
      </div>
      </div>




      <div class="col-md-4">
        <div class="form-group">
        <h4 for="videoFile">Carga tu título en PDF:</h4>
       <input type="file" name="titulopdf" id="file" accept="file/*">
        </div>
      </div>
       
        <p>
        <h4 for="videoFile">Carga tu Cedula:</h4>
        <input type="file" name="cedulapdf" id="file" accept="file/*">
    </p>

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

