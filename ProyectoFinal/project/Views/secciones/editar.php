<div class="container">
    <h1 class="text-center title-list">Editar secciones</h1>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Editar sección <?php echo $datos['nombre'] ?></h3>
      </div>
      <div class="panel-body">

        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            
            <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                  <label for="nombre" class="col-lg-2 control-label">Nombre de la seccion</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $datos['nombre'] ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-success">Editar</button>
                    <button type="reset" class="btn btn-warning">Borrar</button>
                  </div>
                </div>
            </form>

          </div>
        </div>
        
      </div>
    </div> 
</div>
