@extends ('layouts.plantilla')

@section('title')
Tablero
@endsection 

@section('contenido') 

<link rel="stylesheet" href="{{asset('css/caja_azul.css')}}">

 <center><p class="caja"> Lista de Tareas y Acciones </p> </center>
 <br>

 <form>

 <table  class="table table-hover">
  
 <thead>
    <tr>
      <th scope="col">Número</th>
      <th scope="col">Tareas</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  
  <tbody>
    <tr >
      <th scope="row">1</th>
      <td style='color:#337AB7'>Datos Generales</td>
      <td>  
            <a href="{{url('cdd/docente/generales')}}" class="btn btn-warning">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
            </a>

            <a href="#" class="btn btn-primary">
            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
            </a>
      </td>
    </tr>
  </tbody>

  <tbody>
    <tr>
      <th scope="row">2</th>
      <td style='color:green'>Datos Domiciliares</td>
      <td>  
            <a href="{{url('cdd/docente/domicilio')}}" class="btn btn-warning">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
            </a>

            <a href="#" class="btn btn-primary">
            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
            </a>
      </td>
    </tr>
  </tbody>

  <tbody>
    <tr>
      <th scope="row">3</th>
      <td style='color:#337AB7' >Datos de Otras Dependencias</td>
      <td>  
            <a href="{{url('cdd/docente/dependencia')}}" class="btn btn-warning">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
            </a>

            <a href="#" class="btn btn-primary">
            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
            </a>
      </td>
    </tr>
  </tbody>

  <tbody>
    <tr>
      <th scope="row">4</th>
      <td style='color:green'>Producción Académica</td>
      <td>  
            <a href="{{url('cdd/docente/generales')}}" class="btn btn-warning">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
            </a>

            <a href="#" class="btn btn-primary">
            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
            </a>

      </td>
    </tr>
  </tbody>

  <tbody>
    <tr>
      <th scope="row">4</th>
      <td style='color:#337AB7'>Datos Médicos </td>
      <td>  
            <a href="{{url('cdd/docente/generales')}}" class="btn btn-warning">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
            </a>

            <a href="#" class="btn btn-primary">
            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
            </a>

      </td>
    </tr>
  </tbody>

</table>

@endsection 

