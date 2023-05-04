@extends ('layouts.plantilla')
@section('title')
Datos Domiciliarios
@endsection 

@section('contenido') 
<link rel="stylesheet" href="{{asset('css/caja_azul.css')}}">

<center><p class="caja"> Datos Domiciliares </p> </center>
<br>

<form action="{{route('docente.storeDomicilios')}}" method="post" >
@csrf
     
   
    <div class="col-md-4">
        <div class="form-group">
            <label>Nacionalidad</label>          
            <select name="nacionalidad" id="nacionalidad" class="form-control"> 
                <option value="mexicano">Mexicano</option>
                <option value="extranjero">Extranjero</option>
            </select>
        </div>
    </div> 

    <div class="col-md-4">
        <div class="form-group">
            <label>Estado</label>          
            <select name="estado" id="estado" class="form-control"> 
                <option value=""> Selecciona su estado</option>
            </select>
        </div>
    </div> 

    <div class="col-md-4">
        <div class="form-group">
            <label>Municipio</label>          
            <select name="municipio" id="municipio" class="form-control"> 
                <option value=""> Seleccione su municipio</option>
            </select>
        </div>
    </div> 

    <div class="col-md-4">
        <div class="form-group">
          <label>Calle</label>          
          <input type="text" id="calle" name="calle" placeholder="Calle" class="form-control" >
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
          <label>Colonia o Comunidad</label>          
          <input type="text" id="colonia" name="colonia" placeholder="Colonia" class="form-control" >
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
          <label>Código Postal</label>          
          <input type="number" id="cp" name="cp" placeholder="C.P." class="form-control" >
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
          <label>Núm Int/Ext</label>          
          <input type="number" id="numero" name="numero" placeholder="Número del domicilio" class="form-control" >
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

