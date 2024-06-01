<!-- encabezado -->
  <body>
    <br>
    <div class="container">
      <div class="card">
        <div class="card-body text-center">
          <h1>Clothing Store</h1>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-header bg-success text-white">
          Inicio de sesión
        </div>
        <div class="card-body">
          <h5 class="card-title">Ingrese sus datos</h5>
          <br>
          <form action="?c=<?php echo base64_encode("Login");?>&a=<?php echo base64_encode("Entrar");?>" method="post">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required name="email">
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="clave">
              <label for="floatingPassword">Contraseña</label>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Entrar</button>
          </form>
        </div>
      </div>
      <br>


<!-- pie -->