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
          
      <div class="col-md-4">
        <div class="form-group">

          <h4>Ingrese su No. Seguro Social</h4>
          <input type="text" id="nss" name="nss" placeholder="Número de Servicio Social" class="form-control">
        </div></div>

        <div class="col-md-4">
        <div class="form-group">

          <h4>Alergias</h4>
          <input type="text" id="alergias" name="alergias" placeholder="" class="form-control">
        </div>
        </div>

        <div class="col-md-4">
        <div class="form-group">

            <h4>Patolgías</h4>
            <input type="text" id="patologías" name="patologías" placeholder="" class="form-control">
        </div>
      </div>

          <div class="col-md-4">
        <div class="form-group">

            <h4>Tipo de sangre</h4>
        <select id="tipo_sangre" name="tipo_sangre">
            <option>A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>AB+</option>
            <option>AB-</option>
            <option>O</option>
            <option>O</option>
        </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
        <h4>Contacto de emergencia</h4>
            <input type="text" id="contacto_emergencia" name="contacto_emergencia" placeholder="" class="form-control">

        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
        <h4>Telefono de emergencia</h4>
            <input type="number" id="telefono" name="telefono" placeholder="" class="form-control">

        </div>
      </div>
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
        </section>

 



@endsection 

