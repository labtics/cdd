@extends ('layouts.plantilla')

<!-- Tienes que llevar la plantilla desde aqui-->
@section('title')
Datos De Otra Dependencia
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

    <h2>Datos Laborales de otra dependencia</h2> <!-- Inicia DATOS DE OTRA DEPENDENCIA--> 
      

      <h4>Nombre de la dependencia</h4>
      <input type="text" name="dependencia" id="dependencia" placeholder="Ingrese su dependencia"  class="form-control">

      <h4>Dirección de la dependencia</h4>
      <input type="text" id="direccion_dependencia" name="direccion_dependencia" placeholder="Dirección de la dependencia"  class="form-control">

      <h4>Horarios</h4>
      <input type="text"  name="horarios" id="horarios" placeholder="Horario"  class="form-control">
      
      <h4>Días laborales</h4>
      <div>
        <input type="checkbox" id="diaslaborales" name="diasdelasemana"  >
        <label for="scales">Lunes</label>
      </div>
      <div>
        <input type="checkbox" id="diaslaborales" name="diasdelasemana"  >
        <label for="scales">Martes</label>
      </div>
      <div>
        <input type="checkbox" id="diaslaborales" name="diasdelasemana" >
        <label for="scales">Miercoles</label>
      </div>
      <div>
        <input type="checkbox" id="diaslaborales" name="diasdelasemana" >
        <label for="scales">Jueves</label>
      </div>
      <div>
        <input type="checkbox" id="diaslaborales" name="diasdelasemana">
        <label for="scales">Viernes</label>
      </div>
      <div>
        <input type="checkbox" id="diaslaborales" name="diasdelasemana" >
        <label for="scales">Sabado</label>
      </div>
      <div>
        <input type="checkbox" id="diaslaborales" name="diasdelasemana" >
        <label for="scales">Domingo</label>
      </div>

      

      <h4>Nombre del jefe</h4>
      <input type="text" name="nombre_jefe" id="nombre_jefe" placeholder="Nombre del jefe"  class="form-control">

      <h4>Teléfono de la dependencia</h4>
      <input type="text" name="telefono_dependencia" id="telefono_dependencia" placeholder="Teléfono de la dependencia"  class="form-control">
        
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
    <section id="rauchbier" class="tab-panel" >
    </section> 

@endsection 

