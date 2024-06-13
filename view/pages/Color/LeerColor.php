
<div class="container text-center mt-3">
            <h1 class="display-4">PROYECTO FINAL - DESARROLLO WEB</h1>
            <h2 class="display-6">---------LISTAR COLORES---------</h2>
        </div>    
    </header>

    <main class="container ml-1 mr-5 mt-4 border border-success">
        <h3 class="display-7 text-center mb-4 mt-3">Listar Colores</h3>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID Color</th>
                <th scope="col">Nombre</th>
                <th scope="col">Estado</th>
                <th scope="col">Editar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach($this->model->ListarColoresActivos() as $r): ?>                
                  <tr>
                      <th scope="row"><?php echo $r->idcolor; ?></th>
                      <td><?php echo $r->nombre; ?></td>
                      <td><a onclick="javascript:return confirm('¿Está seguro que desea activar esta Talla?')" href="?c=<?php echo base64_encode('Color'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&id=<?php echo base64_encode($r->idcolor); ?>&ne=<?php echo base64_encode('0'); ?>" title="Desactivar Talla"><i class="bi bi-clipboard2-x-fill" style="font-size: 1.5rem; color: red;"></i></a></td>
                      <td><a href="?c=<?php echo base64_encode('Color'); ?>&a=<?php echo base64_encode('ActualizarColor'); ?>&idcolor=<?php echo base64_encode($r->idcolor).'&nombre='.base64_encode($r->nombre); ?>" title="Editar Color"><i class="bi-pen-fill" style="font-size: 1.5rem; color: cornflowerblue;"></i></a></td>
                  </tr>
                <?php endforeach; ?>
              </tr>
            </tbody>
          </table>

          <h3 class="display-7 text-center mb-4 mt-3">Listar Colores Inactivos</h3>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID Color</th>
        <th scope="col">Nombre</th>
        <th scope="col">Estado</th>
        <th scope="col">Editar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach($this->model->ListarColoresInactivos() as $r): ?>                
          <tr>
              <th scope="row"><?php echo $r->idcolor; ?></th>
              <td><?php echo $r->nombre; ?></td>
              <td><a onclick="javascript:return confirm('¿Está seguro que desea activar esta Talla?')" href="?c=<?php echo base64_encode('Color'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&id=<?php echo base64_encode($r->idcolor); ?>&ne=<?php echo base64_encode('1'); ?>" title="Desactivar Talla"><i class="bi-check-circle-fill" style="font-size: 1.5rem; color: green;"></i></a></td>
              <td><a href="?c=<?php echo base64_encode('Color'); ?>&a=<?php echo base64_encode('ActualizarColor'); ?>&idcolor=<?php echo base64_encode($r->idcolor).'&nombre='.base64_encode($r->nombre); ?>" title="Editar Color"><i class="bi-pen-fill" style="font-size: 1.5rem; color: cornflowerblue;"></i></a></td>
          </tr>
        <?php endforeach; ?>
      </tr>
    </tbody>
  </table>
    </main>
</html>