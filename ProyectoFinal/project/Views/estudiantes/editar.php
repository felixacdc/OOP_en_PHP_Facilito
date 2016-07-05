<div class="container">
    <h1 class="text-center title-list">Editar estudiantes</h1>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Editar estudiante <?php echo $datos['nombre']; ?></h3>
      </div>
      <div class="panel-body">

        <div class="row">
          <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-body">
                <img src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $datos['imagen']; ?>" class="img-responsive">
              </div>
            </div>
          </div>
          <div class="col-md-9">
            
            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nombre" class="col-lg-2 control-label">Nombre del estudiante</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="nombre" value="<?php echo $datos['nombre']; ?>" placeholder="Nombre" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="edad" class="col-lg-2 control-label">Edad del estudiante</label>
                  <div class="col-lg-10">
                    <input type="number" class="form-control" name="edad" value="<?php echo $datos['edad']; ?>" placeholder="Edad" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="promedio" class="col-lg-2 control-label">Promedio del estudiante</label>
                  <div class="col-lg-10">
                    <input type="number" class="form-control" name="promedio" value="<?php echo $datos['promedio']; ?>" placeholder="Promedio" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="id_seccion" class="col-lg-2 control-label">Seccion (<b>Sección Actual: <?php echo $datos['nombre_seccion']; ?></b>)</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="id_seccion">
                      <?php 
                        while($row = mysqli_fetch_array($datos)){
                      ?>
                        <option value="<?php echo $row["id"]; ?>"> <?php echo $row["nombre"] ?> <option>
                      <?php
                        }
                      ?>
                    </select>
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
