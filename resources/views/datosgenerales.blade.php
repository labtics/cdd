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
     <input type="text" id="apellido_parteno" name="apellido_parteno" placeholder="Apellido paterno" class="form-control">
    
    <h4>Ingrese su apellido materno </h4>
    <input type="text" id="apellido_materno" name="apellido_materno" placeholder="Apellido materno" class="form-control" required>
  
    <h4>Ingrese su sexo </h4>

    <select name="sexo" id="sexo"> 
      <option value="Femenino">Femenino</option>
      <option value="Masculino">Masculino</option>
    </select>
    <h4>Ingrese su fecha de nacimiento </h4>
    <input type="date" id="fecha_nacimiento" name="fechanacimiento" placeholder="Fecha de nacimiento" class="form-control">
  
    <h4>Ingrese su edad </h4>
     <input type="number" id="edad" name="edad" placeholder="Edad" class="form-control" required>
    
    <h4>Ingrese su teléfono </h4>
    <input type="number" id="telefono" name="telefono" placeholder="Numero de teléfono" class="form-control">
  
    <h4>Ingrese su teléfono 2 </h4>
     <input type="number" id="telefono2" name="telefono2" placeholder="Numero de otro teléfono" class="form-control" required>
    
    <h4>Estado civil </h4>
    
    <select name="estadocivil" id="estado_civil"> 
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
        <select name="tipocategoria" id="tipo_categoria">
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

    </section>
    <section id="rauchbier" class="tab-panel" required>
      <h2>Datos Domiciliarios</h2> <!-- Inicia DATOS DOMICILIARIOS--> 
      
      <h4>Selecione su nacionalidad </h4>
   
    <select name="nacionalidad" id="nacionalidad" required>
      
    <input type="number" id="telefono" name="telefono" placeholder="Numero de teléfono" class="form-control">
  


       <FORM action="#">
        <LAbel for="" > </LAbel>

       </FORM>

      

  
  
  
     <div class="editar">
         <input type="submit" id="editargenerales" value="Editar"></input>
     </div>
     
     <div class="centrado" >
      <input type="submit" id="guardargenerales" value="Guardar"></input>
    
    </div>
  
  </section>
    <section id="dunkles" class="tab-panel" required class="form-control">


    
     
     <h2> Datos Academicos</h2> <!-- Inicia DATOS ACADEMICOS--> 
    
    <h4>Ingrese su grado academico</h4>
     <input type="text" id="grado_academico" placeholder="Ingrese su grado academico" required class="form-control">

    <h4>Ingrese título</h4>
     <input type="text" id="titulo" placeholder="Ingrese su titulo" required class="form-control">

    <h4>Ingrese su cedula</h4>
     <input type="text" id="cedula" placeholder="Ingrese su cedula" required class="form-control">

    <h4>Ingrese estatus</h4>

      <div>
       <input type="checkbox" id="estatus" name="scales" >
       <label for="scales">En proceso</label>
      </div>
      <div>
       <input type="checkbox" id="estatus" name="scales">
       <label for="scales">Finalizado</label>
      </div>




      <p>
        <h4 for="videoFile">Carga tu título en PDF:</h4>
       <input type="file" id="file" accept="file/*">
      </p>
<p>
  <h4 for="videoFile">Carga tu Cedula:</h4>
  <input type="file" id="file" accept="file/*">
</p>

    <div class="centrado" >
      <input type="submit" id="guardaracademicos" value="Guardar" required></input>
    
    </div>
     </section>
     <section id="dunkles" class="tab-panel" required>

     
    </div>
    <h2>Producción academica</h2> <!-- Inicia PRODUCCION ACADEMICA--> 
      <br>
    
      <!--en espera de instrucciónes-->
    <h4>Ingrese nombre del evento asistidos</h4>
     <input type="text" id="evento" placeholder="Ingrese nombre del evento asistidos" required class="form-control">

    <h4>Ingrese la fecha </h4>
      <input type="date" id="Fecha_evento" name="fecha_evento" placeholder="Fecha del evento" class="form-control" required>
      
    <h4>Ingrese la fecha </h4>
      <input type="date" id="Fecha_evento" name="fecha_evento" placeholder="Fecha del evento" class="form-control" required>
  

    <h4>Ingrese nombre de la institución</h4>
     <input type="text" id="institucion" placeholder="Ingrese nombre de la institución" required class="form-control">


    <h4>Ingrese nombre del evento impartdo</h4>
     <input type="text" id="cedula" placeholder="Ingrese nombre del evento asistidos" required class="form-control">


     <div class="centrado" >
      <input type="submit" id="guardargenerales" value="Guardar" required></input>
    
    </div>
    </section>
    <section id="dunkles" class="tab-panel" required>
  <h2>Datos Medicos</h2> <!-- Inicia DATOS MEDICOS--> 
      <br>
    <h4>Ingrese su número de seguro social</h4>
     <input type="text" id="nss" placeholder="Ingrese su número de seguro social" required class="form-control">

    <h4>Alergías</h4>
     <input type="text" id="alergias" placeholder="Alergias" required class="form-control">

    <h4>Patologías</h4>
     <input type="text" id="alergias" placeholder="Patologías" required class="form-control">
 
     
     <h4>Tipos de sangre</h4>
    <select name="tipo_sangre" id="tipo_sangre" required> 
      <option value="">Seleccione el tipo de sangre</option>
      <option value="a+"> A+</option>
      <option value="a-">A-</option>
      <option value="b+"> B+</option>
      <option value="b-">B-</option>
      <option value="ab+"> AB+</option>
      <option value="ab-"> AB-</option>
      <option value="o+">O+</option>
      <option value="o-"> O-</option>
      
    </select>

    <h4>Nombre de contaco de emergencia</h4>
     <input type="text" id="nombre_contacto_emergencia" placeholder="Nombre de contacto de emergencia" required class="form-control">

    <h4>Número de contaco de emergencia</h4>
     <input type="number" id="nombre_contacto_emergencia" placeholder="Número de contacto de emergencia" required class="form-control">

     <div class="centrado" >
      <input type="submit" id="guardargenerales" value="Guardar" required></input>
    
    </div>

    </section>
   
  </div>
  
</div>
</form>

@endsection 

