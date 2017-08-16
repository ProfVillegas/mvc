<div class="container">
 <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Inicio de sesión</legend>
    <div class="form-group">
      <label for="inputNombre" class="col-md-2 control-label">Nombre</label>
      

      <div class="col-md-10">
        <input type="text" name="nombre" value="" class="form-control" id="inputNombre" placeholder="Nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-md-2 control-label">Password</label>

      <div class="col-md-10">
        <input type="password" name="password" value="" class="form-control" id="inputPassword" placeholder="Password">

        
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary" id="enviar">Iniciar Sesión</button>
      </div>
    </div>
  </fieldset>
</form>
</div>