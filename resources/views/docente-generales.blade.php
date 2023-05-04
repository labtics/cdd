@extends ('layouts.plantilla')
@section('title')
  Datos Generales
@endsection 

@section('contenido') 

 <link rel="stylesheet" href="{{asset('css/caja_azul.css')}}">

 <center><p class="caja"> Datos Generales </p> </center>
 <br>

 <form action="{{route('docente.storeGenerales')}}" method="post" >
 @csrf
      @include('layouts.mensajes')
    <br>
    <div class="col-md-3">
        <div class="form-group">
           <label>Núm Empleado</label>
           <input type="text" id="empleado" name="empleado" placeholder="Número de empleado" class="form-control" >
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="form-group">
           <label>Nombre</label>
           <input type="text" id="nombre" name="nombre" placeholder="Nombre de empleado" class="form-control" >
          </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
          <label>Apellido Paterno</label>          
          <input type="text" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido paterno" class="form-control">
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
          <label>Apellido Materno</label>          
          <input type="text" id="apellido_materno" name="apellido_materno" placeholder="Apellido materno" class="form-control" >
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="form-group">
            <label>Sexo</label>          
            <select name="sexo" id="sexo" class="form-control"> 
                <option value="Mujer">Mujer</option>
                <option value="Hombre">Hombre</option>
            </select>
        </div>
    </div>
  
    <div class="col-md-3">
        <div class="form-group">
             <label>Fecha de Nacimiento</label>          
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de nacimiento" class="form-control">
        </div>
    </div>
   
    <div class="col-md-2">
        <div class="form-group">
           <label>Edad</label>          
           <input type="number" id="edad" name="edad" placeholder="Edad" class="form-control" >
        </div>
    </div>
   
    <div class="col-md-2">
        <div class="form-group">
           <label>Teléfono 1</label>   
           <input type="number" id="telefono1" name="telefono1" placeholder="Numero de teléfono" class="form-control">
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
           <label>Teléfono 2</label>   
           <input type="number" id="telefono2" name="telefono2" placeholder="Numero de teléfono" class="form-control">
        </div>
    </div>
    
    <div class="col-md-2">
        <div class="form-group">
           <label>Elija Estado Civil</label>   
           <select name="estado_civil" id="estado_civil" class="form-control"> 
              <option value="soltero"> Soltero(a)</option>
              <option value="casado"> Casado(a)</option>
              <option value="divorciado">Divorciado(a)</option>
              <option value="viudo"> Viudo(a)</option>
              <option value="unionlibre"> Unión libre</option>
            </select>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label>Elija Categoría</label> 
            <select name="categoria" id="categoria" class="form-control">
                <option value="eventual">Eventual</option>
                <option value="base">Base</option>
            </select>
        </div>
    </div>
    
    <div class="col-md-2">
        <div class="form-group"> 
           <label>Elija Tipo Categoría</label> 
            <select name="categoria_tipo" id="categoria_tipo" class="form-control">
              <option value="tiempocompleto"> Tiempo completo</option>
              <option value="asignaturaeventual"> Asignatura eventual</option>
              <option value="asignaturabase"> Asignatura base</option>
              <option value="mediotiempo"> Medio tiempo</option>
              <option value="tecnicoacademico"> Tecníco academico</option>
            </select>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group"> 
            <label>R.F.C.</label> 
            <input type="text" id="rfc" name="rfc" placeholder="RFC" class="form-control" >
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group"> 
           <label>C.U.R.P.</label> 
           <input type="text" id="curp" name="curp" placeholder="CURP" class="form-control">
        </div>
    </div>
    <br>
    <br>
    <center>
        <a href="{{URL::previous ()}}"><button type="button" class="btn btn-secondary">Regresar</button></a>
        <button class="btn btn-success"> <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar </button>
    </center>
 
  </form>

@endsection 

