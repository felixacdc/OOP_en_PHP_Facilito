<div class="container">
    <h1 class="text-center title-list">Agregar estudiantes</h1>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Agregar un nuevo estudiante</h3>
      </div>
      <div class="panel-body">

        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            
            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nombre" class="col-lg-2 control-label">Nombre del estudiante</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="edad" class="col-lg-2 control-label">Edad del estudiante</label>
                  <div class="col-lg-10">
                    <input type="number" class="form-control" name="edad" placeholder="Edad" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="promedio" class="col-lg-2 control-label">Promedio del estudiante</label>
                  <div class="col-lg-10">
                    <input type="number" class="form-control" name="promedio" placeholder="Promedio" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="id_seccion" class="col-lg-2 control-label">Seccion</label>
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
                  <label for="imagen" class="col-lg-2 control-label">Imagen del estudiante</label>
                  <div class="col-lg-10">
                    <input type="file" class="form-control" id="imagen" name="imagen" placeholder="Imagen" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-success">Registrar</button>
                    <button type="reset" class="btn btn-warning">Borrar</button>
                  </div>
                </div>
            </form>

          </div>
        </div>
        
      </div>
    </div> 
</div>
