<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Redimensional imagen con Laravel 8</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('imgs/favicon.jpeg') }}">
  <!--  <link rel="stylesheet" href="{{ asset('css/loader.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  </head>
  <body>

    <!---
    <div id="loader">
      <div class="preloader"></div>
      <div class="loadBar">
        <div class="progress"></div>
      </div>
    </div>
    --->


<div id="page" class="hidden">

  <div class="container" style="background-color: #fff !important;">
    <h1 class="mt-5 mb-3 text-center">Hello, world!</h1>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Subir Inmueble</button>

    @include('form_modal')



    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <div class="offer-type-wrap" id="etiquetaDestacado">
            <span class="offer-type bg-danger">Destacado</span>
          </div>
          <img src="{{ asset('fotos_inmuebles/3.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Casa</h5>
            <p style="color:#5a534d !important;">Bogotá (Distrito Capital)</p>
            <strong class="property-price text-primary mb-3 d-block color-primario">
              $1.200.000.000       
              <span style="float: right; color: #999999;"> #3184</span>         
            </strong>

            <ul class="property-specs-wrap mb-3 mb-lg-0" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
              <li>
                  <span class="property-specs">Habitaciones</span>
                  <span class="property-specs-number">4</span>
                  <img src="{{ asset('imgs/cama.png') }}" alt="Quiero vender mi inmueble">
              </li>

              <li>
                  <span class="property-specs" style="margin-left:10px;">Baños</span>
                  <span class="property-specs-number">5</span>
                  <img src="{{ asset('imgs/bano.png') }}" alt="Vender mi inmueble">
              </li>

              <li>
                  <span class="property-specs" style="margin-left:25px;">Área Mt2</span>
                  <span class="property-specs-number">360</span>
                  <img src="{{ asset('imgs/Mt2.png') }}" alt="Quiero permutar mi Inmueble">
              </li>
            </ul>


          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="offer-type-wrap" id="etiquetaRecomendado">
            <span class="offer-type bg-danger">Recomendado</span>
          </div>
          <img src="{{ asset('fotos_inmuebles/2.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">finca</h5>
            <p style="color:#5a534d !important;">Bogotá (Distrito Capital)</p>
            <strong class="property-price text-primary mb-3 d-block color-primario">
              $1.200.000.000       
              <span style="float: right; color: #999999;"> #3184</span>         
            </strong>

            <ul class="property-specs-wrap mb-3 mb-lg-0" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
              <li>
                  <span class="property-specs">Habitaciones</span>
                  <span class="property-specs-number">4</span>
                  <img src="{{ asset('imgs/cama.png') }}" alt="Quiero vender mi inmueble">
              </li>

              <li>
                  <span class="property-specs" style="margin-left:10px;">Baños</span>
                  <span class="property-specs-number">5</span>
                  <img src="{{ asset('imgs/bano.png') }}" alt="Vender mi inmueble">
              </li>

              <li>
                  <span class="property-specs" style="margin-left:25px;">Área Mt2</span>
                  <span class="property-specs-number">360</span>
                  <img src="{{ asset('imgs/Mt2.png') }}" alt="Quiero permutar mi Inmueble">
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('fotos_inmuebles/1.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Apartamento</h5>
            <p style="color:#5a534d !important;">Bogotá (Distrito Capital)</p>
            <strong class="property-price text-primary mb-3 d-block color-primario">
              $1.200.000.000       
              <span style="float: right; color: #999999;"> #3184</span>         
            </strong>

            <ul class="property-specs-wrap mb-3 mb-lg-0" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
              <li>
                  <span class="property-specs">Habitaciones</span>
                  <span class="property-specs-number">4</span>
                  <img src="{{ asset('imgs/cama.png') }}" alt="Quiero vender mi inmueble">
              </li>

              <li>
                  <span class="property-specs" style="margin-left:10px;">Baños</span>
                  <span class="property-specs-number">5</span>
                  <img src="{{ asset('imgs/bano.png') }}" alt="Vender mi inmueble">
              </li>

              <li>
                  <span class="property-specs" style="margin-left:25px;">Área Mt2</span>
                  <span class="property-specs-number">360</span>
                  <img src="{{ asset('imgs/Mt2.png') }}" alt="Quiero permutar mi Inmueble">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
  

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
  /*  $(window).load(function() {
    var rnd = Math.random() * (1000 - 2000) + 2000;
    $('.progress').css("animation", "loading " + rnd + "ms linear");
    console.log(rnd);
    
    setTimeout(function() {
      $('#loader').hide();
      $('#page').removeClass('hidden');
    }, rnd);
    });
*/

  /***SCRIPT DE VISTA PREVIA IMAGEN***/
  const $ = document.querySelector.bind(document);
  const previewImg = $('.imagem');
  const fileChooser = $('.input-file');

  fileChooser.onchange = e => {
    const fileToUpload = e.target.files.item(0);
    const reader = new FileReader();
    reader.onload = e => previewImg.src = e.target.result;
    reader.readAsDataURL(fileToUpload);
  }
</script>
  </body>
</html>
