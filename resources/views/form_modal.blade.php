<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">REGISTRA NUEVO INMUEBLE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="{{ route('guardar') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="tipo_inmueble" class="form-label">Tipo Inmueble</label>
            <select name="tipo_inmueble" class="form-select" required>
              <option value="">seleccionar</option>
              <option value="Apartamento">Apartamento</option>
              <option value="Casa">Casa</option>
              <option value="Casa Campestre">Casa Campestre</option>
              <option value="Finca">Finca</option>
              <option value="Lote">Lote</option>
              <option value="Otro">Otro</option>
            </select>
          </div>

          <div class="row mb-3">
            <div class="col-8">
                <label for="direccion" class="form-label">Municipio - Localidad</label>
                <input type="text" name="direccion" class="form-control">
            </div>
            <div class="col-4">
              <label for="estatus" class="form-label">Estatus</label>
              <select name="estatus" class="form-select" required>
                <option value="">seleccionar</option>
                <option value="">Destacado</option>
                <option value="">Recomendado</option>
              </select>
            </div>
          </div>


          <div class="row mb-3">
            <div class="col">
              <label for="numero_habitacion" class="form-label"># Habitaciones</label>
              <select name="numero_habitacion" class="form-select" required>
                <option value="">seleccionar</option>
                @for($a=1; $a <=10; $a ++){
                    <option value="{{ $a }}">Habitación {{ $a }}</option>
                  }
                @endfor
              </select>
            </div>
            <div class="col">
              <label for="numero_bano" class="form-label"># Baños</label>
              <select name="numero_bano" class="form-select" required>
                <option value="">seleccionar</option>
                @for($b=1; $b <=5; $b ++){
                    <option value="{{ $b }}">Baño {{ $b }}</option>
                  }
                @endfor
              </select>
            </div>
            <div class="col">
              <label for="numero_area" class="form-label">Área mt2</label>
              <input type="number" name="numero_area" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col">
              <label for="precio" class="form-label">Precio</label>
              <input type="number" name="precio" class="form-control">
            </div>
            @php
              function codigoAleatorio($length = 4) { 
                  return substr(str_shuffle("0123456789"), 0, $length); 
                } 
                $micodigo  = codigoAleatorio();
            @endphp
            <div class="col">
              <label for="codigo" class="form-label">Código</label>
              <input type="number" name="codigo" value="{{ $micodigo }}" class="form-control" readonly>
            </div>
          </div>

          <div class="row mt-4 form-upload">
            <div class="col">
              <label class="input-personalizado">
                <span class="botao-selecionar">Selecione una foto</span>
                <img class="imagem" />
                <input type="file" name="foto" class="input-file" accept="image/*" required>
              </label>
            </div>
          </div>

          <div class="modal-footer mt-5">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Registrar</button>
          </div>
        </form>
      </div>

    
    </div>
  </div>
</div>

