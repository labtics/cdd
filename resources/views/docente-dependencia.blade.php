@extends ('layouts.plantilla')

<!-- Tienes que llevar la plantilla desde aqui-->
@section('title')
Datos De Otra Dependencia
@endsection 

@section('contenido') 

<link rel="stylesheet" href="{{asset('css/caja_azul.css')}}">

<center><p class="caja"> Datos de Otra Dependencia </p> </center>
<br>

<form action="{{route('docente.storeDependencias')}}" method="post" >
@csrf
      @include('layouts.mensajes')      


    <div class="col-md-4">
        <div class="form-group">
           <label>Dependencia</label>
           <input type="text" name="dependencia" id="dependencia" placeholder="Nombre de la dependencia"  class="form-control">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
           <label>Dirección</label>
           <input type="text" id="direccion_dependencia" name="direccion_dependencia" placeholder="Dirección de la dependencia"  class="form-control">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
           <label>Teléfono</label>
           <input type="text" id="telefono_dependencia" name="telefono_dependencia" placeholder="Obligatorio"  class="form-control">
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label>Turno</label>          
            <select name="turno_semanal" id="turno_semanal" class="form-control"> 
                <option value="Mujer">Matutino</option>
                <option value="Hombre">Vespertino</option>
                <option value="Hombre">Nocturno</option>
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Semanal</label> <br>          
              <input type="checkbox" id="diaslaborales" name="diasdelasemana"  >
              <label>Lunes</label>

              <input type="checkbox" id="diaslaborales" name="diasdelasemana"  >
              <label>Martes</label>
        
              <input type="checkbox" id="diaslaborales" name="diasdelasemana" >
              <label>Miercoles</label>
        
              <input type="checkbox" id="diaslaborales" name="diasdelasemana" >
              <label>Jueves</label>

              <input type="checkbox" id="diaslaborales" name="diasdelasemana">
              <label for="scales">Viernes</label>
          </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
         <label>Hora Entrada</label>
         <input type="time" name="horario_entrada" min="12:00" max="18:00" step="600" class="form-control"> 
         </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
         <label>Hora Salida</label>
         <input type="time" name="horario_salida" min="12:00" max="18:00" step="600" class="form-control"> 
         </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label>Turno</label>          
            <select name="turno_fin" id="turno_fin" class="form-control"> 
                <option value="Mujer">Matutino</option>
                <option value="Hombre">Vespertino</option>
                <option value="Hombre">Nocturno</option>
            </select>
        </div>
    </div>



    <div class="col-md-2">
        <div class="form-group">
         <label>Hora Entrada</label>
         <input type="time" name="horario_entrada_s" min="12:00" max="18:00" step="600" class="form-control"> 
         </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
         <label>Hora Salida</label>
         <input type="time" name="horario_salida_s" min="12:00" max="18:00" step="600" class="form-control"> 
         </div>
    </div>

    <center>
        <a href="{{URL::previous ()}}"><button type="button" class="btn btn-secondary">Regresar</button></a>
        <button class="btn btn-success"> <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar </button>
    </center>

</form>

@endsection 

