@extends ('layouts.plantilla')

@section('title')
principal
@endsection 

@section ('contenido') 
<style>
.slider-container {
  display: flex;
  width: 100%;
  height: 80vh;
  overflow-x:scroll;
  scroll-snap-type: x mandatory;
}

.slider-container img {
  flex: 0 0 100%;
  width: 100%;
  object-fit: cover;
  scroll-snap-align: center;
}
</style>
<body>

<div class="slider-container">        
    <img class="slider-container " src="{{asset('img\imagen1.jpg')}}" />
    <img   class="slider-container img" src="{{asset('img\imagen2.jpg')}}"/>
    <img  class="slider-container" src="{{asset('img\imagen3.jpg')}}"/>
</div>

</body>



@endsection 

