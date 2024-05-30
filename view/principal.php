<!-- encabezado -->
<br>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h1>Página pincipal</h1>
        </div>
      </div>
      <br>

      <div class="card">
        <div class="card-header bg-success text-white">
          Operaciones generales
        </div>
        <div class="card-body">
          <h5 class="card-title">Selecciones una operación</h5>
          <br>
          
          <div class="row">
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                  <a class="icon-link text-success" href="?c=<?php echo base64_encode('Cliente'); ?>">
                    <i class="bi-person-arms-up text-success" style="font-size: 4rem;"></i>
                    Cliente
                </a>
                </div>
              </div>

            </div>
            
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                  <a class="icon-link text-success" href="?c=<?php echo base64_encode('Talla'); ?>">
                    <i class="bi-file-earmark-font-fill text-success" style="font-size: 4rem;"></i>
                    Talla
                </a>
                </div>
              </div>

            </div>
            
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                  <a class="icon-link text-success" href="?c=<?php echo base64_encode('Color'); ?>">
                    <i class="bi-palette-fill text-success" style="font-size: 4rem;"></i>
                    Color
                </a>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
      <br>

<!-- pie -->