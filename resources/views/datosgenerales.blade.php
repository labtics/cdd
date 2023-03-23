@extends ('layouts.plantilla')

@section('title')
Datos generales
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

 @csrf
<div class="tabset">
  <!-- Tab 1 -->
  <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
  <label for="tab1">Datos Generales</label> <!-- Inicia DATOS GENERALES--> 
  <!-- Tab 2 -->
  <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
  <label for="tab2">Domicilario</label>
  <!-- Tab 3 -->
  <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
  <label for="tab3">Otra dependencia </label>

  <input type="radio" name="tabset" id="tab4" aria-controls="dunkles">
  <label for="tab4">Académica</label>

  <input type="radio" name="tabset" id="tab5" aria-controls="dunkles">
  <label for="tab5">Producción Academica</label>

  <input type="radio" name="tabset" id="tab6" aria-controls="dunkles">
  <label for="tab6">Médicos</label>
  
  <div class="tab-panels">
    <section id="marzen" class="tab-panel" required>
      <h2>Datos Generales</h2><!-- Inicia DATOS GENERALES--> 
      <br>
      <h4>Ingrese el número del empleado</h4>
     <input type="text" id="empleado" name="empleado" placeholder="Número de empleado" class="form-control" required>
    
    <h4>Ingrese el nombre del empleado</h4>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre de empleado" class="form-control" required>
  
    <h4>Ingrese su apellido paterno </h4>
     <input type="text" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido paterno" class="form-control">
    
    <h4>Ingrese su apellido materno </h4>
    <input type="text" id="apellido_materno" name="apellido_materno" placeholder="Apellido materno" class="form-control" required>
  
    <h4>Ingrese su sexo </h4>

    <select name="sexo" id="sexo"> 
      <option value="Mujer">Mujer</option>
      <option value="Hombre">Hombre</option>
    </select>
    <h4>Ingrese su fecha de nacimiento </h4>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de nacimiento" class="form-control">
  
    <h4>Ingrese su edad </h4>
     <input type="number" id="edad" name="edad" placeholder="Edad" class="form-control" required>
    
    <h4>Ingrese su teléfono </h4>
    <input type="number" id="telefono1" name="telefono1" placeholder="Numero de teléfono" class="form-control">
  
    <h4>Ingrese su teléfono 2 </h4>
     <input type="number" id="telefono2" name="telefono2" placeholder="Numero de otro teléfono" class="form-control" required>
    
    <h4>Estado civil </h4>
    
    <select name="estado_civil" id="estado_civil"> 
      <option value="soltero"> Soltero(a)</option>
      <option value="casado"> Casado(a)</option>
      <option value="divorciado">Divorciado(a)</option>
      <option value="viudo"> Viudo(a)</option>
      <option value="unionlibre"> Unión libre</option>
    </select>

    <h4>Ingrese su categoria </h4>
    <select name="categoria" id="categoria" required>
      <option value="eventual">Eventual</option>
      <option value="base">Base</option>
    </select>
<!---->
    
    <h5>Seleccione su tipo de categoria</h5>
        <select name="categoria_tipo" id="categoria_tipo">
          <option value="tiempocompleto"> Tiempo completo</option>
          <option value="asignaturaeventual"> Asignatura eventual</option>
          <option value="asignaturabase"> Asignatura base</option>
          <option value="mediotiempo"> Medio tiempo</option>
          <option value="tecnicoacademico"> Tecníco academico</option>
        </select>
  
    <h4>Ingrese su RFC </h4>
    <input type="text" id="rfc" name="rfc" placeholder="RFC" class="form-control" required>
  
    <h4>Ingrese su CURP </h4>
     <input type="text" id="curp" name="curp" placeholder="CURP" class="form-control">

    
     
     <div class="centrado" >
      <input type="submit" id="guardargenerales" value="Guardar" required></input>
    
    </div>

    
  
</div>
</form>

@endsection 

