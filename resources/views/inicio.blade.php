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
    </style> 
    <link rel="stylesheet" href="{{asset('css/tabs_modalidades.css')}}">


 <form action="{{ route('registrar')}}" method="post" >


 <!-- Tienes que llevar la plantilla hasta aqui-->

 
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
      @include('layouts.mensajes')

      <br>
      <h4>Ingrese el número del empleado</h4>
     <input type="text" id="empleado" name="empleado" placeholder="Número de empleado" class="form-control" >
    
    <h4>Ingrese el nombre del empleado</h4>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre de empleado" class="form-control" >
  
    <h4>Ingrese su apellido paterno </h4>
     <input type="text" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido paterno" class="form-control">
    
    <h4>Ingrese su apellido materno </h4>
    <input type="text" id="apellido_materno" name="apellido_materno" placeholder="Apellido materno" class="form-control" >
  
    <h4>Ingrese su sexo </h4>

    <select name="sexo" id="sexo"> 
      <option value="Mujer">Mujer</option>
      <option value="Hombre">Hombre</option>
    </select>
    <h4>Ingrese su fecha de nacimiento </h4>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de nacimiento" class="form-control">
  
    <h4>Ingrese su edad </h4>
     <input type="number" id="edad" name="edad" placeholder="Edad" class="form-control" >
    
    <h4>Ingrese su teléfono </h4>
    <input type="number" id="telefono1" name="telefono1" placeholder="Numero de teléfono" class="form-control">
  
    <h4>Ingrese su teléfono 2 </h4>
     <input type="number" id="telefono2" name="telefono2" placeholder="Numero de otro teléfono" class="form-control" >
    
    <h4>Estado civil </h4>
    
    <select name="estado_civil" id="estado_civil"> 
      <option value="soltero"> Soltero(a)</option>
      <option value="casado"> Casado(a)</option>
      <option value="divorciado">Divorciado(a)</option>
      <option value="viudo"> Viudo(a)</option>
      <option value="unionlibre"> Unión libre</option>
    </select>

    <h4>Ingrese su categoria </h4>
    <select name="categoria" id="categoria" >
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
    <input type="text" id="rfc" name="rfc" placeholder="RFC" class="form-control" >
  
    <h4>Ingrese su CURP </h4>
     <input type="text" id="curp" name="curp" placeholder="CURP" class="form-control">

    
     
     <div class="centrado" >
      <input type="submit" id="guardargenerales" value="Guardar" ></input>
    
    </div>

    </section>
    <section id="rauchbier" class="tab-panel" >
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

      <div class="centrado" >
      <input type="submit" id="guardardomiciliarios" value="Guardar" ></input>
    
    </div>
    
    </section>
      <section id="dunkles" class="tab-panel" >
      
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
      
     <div class="centrado" >
      <input type="submit"  id="guardargenerales" value="Guardar" ></input>
    
    </div>
  
  </section>
    <section id="dunkles" class="tab-panel" class="form-control">


    
     
     <h2> Datos Academicos</h2> <!-- Inicia DATOS ACADEMICOS--> 
    
    <h4>Ingrese su grado academico</h4>
     <input type="text" id="grado_academico" name="grado_academico" placeholder="Ingrese su grado academico" class="form-control">

    <h4>Ingrese título</h4>
     <input type="text" id="titulo" name="titulo" placeholder="Ingrese su titulo" class="form-control">

    <h4>Ingrese su cedula</h4>
     <input type="text" id="cedula" name="cedula" placeholder="Ingrese su cedula" class="form-control">

    <h4>Ingrese estatus</h4>

      <div>
       <input type="checkbox" id="estatus" name="estatus" >
       <label for="scales">En proceso</label>
      </div>
      <div>
       <input type="checkbox" id="estatus" name="estatus">
       <label for="scales">Finalizado</label>
      </div>




      <p>
        <h4 for="videoFile">Carga tu título en PDF:</h4>
       <input type="file" name="titulopdf" id="file" accept="file/*">
      </p>
<p>
  <h4 for="videoFile">Carga tu Cedula:</h4>
  <input type="file" name="cedulapdf" id="file" accept="file/*">
</p>

    <div class="centrado" >
      <input type="submit" id="guardaracademicos" value="Guardar" ></input>
    
    </div>
     </section>
     <section id="dunkles" class="tab-panel" >

    
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


     <div class="centrado" >
      <input type="submit" id="guardargenerales" value="Guardar" ></input>
    
    </div>
    </section> <section id="dunkles" class="tab-panel" >
  <h2>Datos Medicos</h2> <!-- Inicia DATOS MEDICOS--> 
          <br>
        <h4>Ingrese su número de seguro social</h4>
        <input type="text" id="nss" name="nss" placeholder="Ingrese su número de seguro social"  class="form-control">

        <h4>Alergías</h4>
        <input type="text" id="alergias" name="alergias" placeholder="Alergias"  class="form-control">

        <h4>Patologías</h4>
        <input type="text" id="patologias" name="patologias" placeholder="Patologías" class="form-control">
    
        
        <h4>Tipos de sangre</h4>
        <select name="tipo_sangre" id="tipo_sangre" > 
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
        <input type="text" id="nombre_contacto_emergencia" name="nombre_contacto_emergencia" placeholder="Nombre de contacto de emergencia"  class="form-control">

        <h4>Número de contaco de emergencia</h4>
        <input type="number" id="nombre_contacto_emergencia" name="nombre_contacto_emergencia" placeholder="Número de contacto de emergencia" class="form-control">

        <div class="centrado" >
          <input type="submit" id="guardargenerales" value="Guardar" ></input>
    
    </div>

    </section>
   
  </div>
  
</div>

@endsection 

