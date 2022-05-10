<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <title>Redimensionar imagen con Laravel 8</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('imgs/favicon.jpeg') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/notification.css') }}">
  </head>
  <body>


  <!---mensaje -->
  @if ( session('msjInmueble') )
  <div class="wrapper">
    <div class="toast">
      <div class="content">
        <div class="icon"><i class="uil uil-wifi"></i></div>
        <div class="details">
          <span>Felicitaciones</span>
          <p>Inmueble registrado correctamente.</p>
        </div>
      </div>
      <div class="close-icon"><i class="uil uil-times"></i></div>
    </div>
  </div>
  @endif
<!--fin del mensaje -->



<div class="container" style="background-color: #fff !important;">
    <h1 class="mb-5 mb-3 text-center mi-wold">Redimencionar imágen con Laravel 8 
      <br> usando (intervention/image)
      <button type="button" style="float: right;" class="btn btn-danger mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Subir Inmueble</button>
    </h1>

    <br><br>
    <br><br>

    @include('form_modal')



<section style="background-color: #f9f9f9 !important">

@if($inmuebles->count())
    <div class="row row-cols-1 row-cols-md-3 g-4 pd-special">

    @foreach ($inmuebles as $inmueble)
      <div class="col-md-4 mb-4  ">
        <div class="card">

          @if ($inmueble->estatus == 'Destacado')
          <div class="offer-type-wrap" id="etiquetaDestacado">
            <span class="offer-type bg-danger">
              {{ $inmueble->estatus }}  
              </span>
          </div>
          @else
          <div class="offer-type-wrap" id="etiquetaRecomendado">
            <span class="offer-type bg-danger">
              {{ $inmueble->estatus }}  
              </span>
          </div>
          @endif

          <img src="fotos_inmuebles/{{ $inmueble->foto }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $inmueble->tipo_inmueble }}</h5>
            <p style="color:#5a534d !important;">{{ $inmueble->direccion }}</p>
            <strong class="property-price text-primary mb-3 d-block color-primario">
              ${{ $inmueble->precio }}       
              <span style="float: right; color: #999999;"> #{{ $inmueble->codigo }}</span>         
            </strong>

            <ul class="property-specs-wrap mb-3 mb-lg-0" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
              <li>
                  <span class="property-specs">Habitación</span>
                  <span class="property-specs-number">{{ $inmueble->numero_habitacion }}</span>
                  <img src="{{ asset('imgs/cama.png') }}" alt="Quiero vender mi inmueble">
              </li>

              <li>
                  <span class="property-specs" style="margin-left:10px;">Baño</span>
                  <span class="property-specs-number">{{ $inmueble->numero_bano }}</span>
                  <img src="{{ asset('imgs/bano.png') }}" alt="Vender mi inmueble">
              </li>

              <li>
                  <span class="property-specs" style="margin-left:25px;">Área Mt2</span>
                  <span class="property-specs-number">{{ $inmueble->numero_area }}</span>
                  <img src="{{ asset('imgs/Mt2.png') }}" alt="Quiero permutar mi Inmueble">
              </li>
            </ul>


          </div>
        </div>
      </div>
    @endforeach


    </div>

    @else
      <h2 class="text-center">No hay Inmuebles</h2>
    @endif

  </section>


    
  </div>

<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
  $(window).load(function() {
    $('.close-icon').click(function(){
      $('.wrapper').addClass('hide');
    }); 
    setTimeout(()=>{ 
      $('.wrapper').addClass('hide');
    }, 5000);
  }); 
</script>

  </body>
</html>
