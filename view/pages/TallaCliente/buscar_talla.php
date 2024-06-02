    <!--Header-->
    <div class="container">
    <h3 class="display-7 text-center mb-4 mt-3">Listar Tallas</h3>

    <form action="?c=<?php echo base64_encode('TallaCliente').'&a='.base64_encode('buscarTallaCliente')?>" method="post">
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="id_tallaCLiente">
            <label for="floatingInput">Buscar Tallas por ID del Cliente</label>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID Talla cliente</th>
            <th scope="col">Talla</th>
            <th scope="col">Detalle</th>
            <th scope="col">ELIMINAR</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->ObtenerUnaTallaCliente($_REQUEST["id_tallaCLiente"]) as $r): ?>                
            <tr>
                <th scope="row"><?php echo $r->idtallacliente; ?></th>
                <td><?php echo $r->talla; ?></td>
                <td><?php echo $r->detalle; ?></td>
                <td><a href="?c=<?php echo base64_encode('TallaCliente').'&a='.base64_encode("eliminarTallaCliente").'&idtallaclienteF='.$r->idtallacliente?>" title="Elimiar"><i class="bi-trash3-fill" style="font-size: 1.5rem; color: red;"></i></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>
    <div class="contrainer mt-3">
        <a href="?c=<?php echo base64_encode('TallaCliente')?>" class="btn btn-primary" role="button">Ver Tabla de Datos</a>
    </div>

</div>