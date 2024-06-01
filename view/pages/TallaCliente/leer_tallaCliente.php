
    <!--Header-->
    <div class="container">
    <h3 class="display-7 text-center mb-4 mt-3">Listar Tallas</h3>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID Talla cliente</th>
        <th scope="col">Talla</th>
        <th scope="col">Detalle</th>
        <th scope="col">EDITAR</th>
        <th scope="col">ELIMINAR</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->ObtenerTallasClientes() as $r): ?>                
        <tr>
            <th scope="row"><?php echo $r->idtallacliente; ?></th>
            <td><?php echo $r->talla; ?></td>
            <td><?php echo $r->detalle; ?></td>
            <td><a href="http://" title="Editar"><i class="bi bi-pencil-square" style="font-size: 1.5rem;"></i></a></td>
            <td><a href="http://" title="Elimiar"><i class="bi-trash3-fill" style="font-size: 1.5rem; color: red;"></i></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

    </div>
<!--Footer-->