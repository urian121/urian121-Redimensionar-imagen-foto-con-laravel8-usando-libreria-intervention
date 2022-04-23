<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">REGISTRA NUEVO INMUEBLE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo Inmueble</label>
            <select name="tipo_inmueble" class="form-select" required>
              <option value="">seleccionar</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Municipio - Localidad</label>
            <input type="text" class="form-control">
          </div>

          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1" class="form-label"># Habitaciones</label>
              <select name="hab" class="form-select" required>
                <option value="">seleccionar</option>
                @for($a=1; $a <=10; $a ++){
                    <option value="">Habitación {{ $a }}</option>
                  }
                @endfor
              </select>
            </div>
            <div class="col">
              <label for="exampleInputPassword1" class="form-label"># Baños</label>
              <select name="hab" class="form-select" required>
                <option value="">seleccionar</option>
                @for($b=1; $b <=5; $b ++){
                    <option value="">Baño {{ $b }}</option>
                  }
                @endfor
              </select>
            </div>
            <div class="col">
              <label for="exampleInputPassword1" class="form-label">Area mt2</label>
              <input type="number" class="form-control" placeholder="Last name">
            </div>
          </div>

          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1" class="form-label">Precio</label>
              <input type="number" class="form-control">
            </div>
            <div class="col">
              <label for="exampleInputPassword1" class="form-label">Código</label>
              <input type="number" class="form-control" readonly>
            </div>
          </div>

          <div class="row mt-4 form-upload">
            <div class="col">
              <label class="input-personalizado">
                <span class="botao-selecionar">Selecione uma imagem</span>
                <img class="imagem" />
                <input type="file" class="input-file" accept="image/*">
              </label>
            </div>
          </div>

          <div class="modal-footer mt-5">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-success">Registrar</button>
          </div>
        </form>
      </div>

    
    </div>
  </div>
</div>

