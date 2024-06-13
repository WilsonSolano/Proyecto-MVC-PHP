        <div class="container text-center mt-3">
            <h1 class="display-4">PROYECTO FINAL - DESARROLLO WEB</h1>
            <h2 class="display-6">---------CREAR COLOR---------</h2>
        </div>    
    </header>
    <main class="container ml-1 mr-5 mt-4 border border-success">
        <h3 class="display-7 text-center mb-4 mt-3">Registrar una color</h3>
        <form action="?c=<?php echo base64_encode("Color").'&a='.base64_encode('insertarColor')?>" method="post">
            <div class="input-group mb-5">
                <span class="input-group-text" id="basic-addon1">Nombre: </span>
                <input name="newColor" type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>
    </main>