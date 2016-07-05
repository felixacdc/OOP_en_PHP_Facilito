<div class="container">
    <h1 class="text-center title-list">Listado de secciones</h1>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Listado de secciones</h3>
      </div>
      <div class="panel-body">  
        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                while ( $row = mysqli_fetch_array($datos) ) {
            ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['nombre']; ?></td>
                  <td>
                      <a class="btn btn-info btn-sm" href="<?php echo URL; ?>secciones/editar/<?php echo $row['id']; ?>">Editar</a>
                      <a class="btn btn-danger btn-sm" href="<?php echo URL; ?>secciones/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
                  </td>
                </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div> 
</div>
