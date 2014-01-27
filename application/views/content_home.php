<!-- CONTENIDO -->
        
 <div class="container">

    <div class = "row">
        <div class = "col-md-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development. Watch Now!</p>
                    <hr>
                    <p>Sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development. Watch Now!</p>
                </div>
            </div>
         </div>
        
        <div class = "col-md-10"> 
        
                <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Tabla de usuarios</div>

            
                <!-- Table -->
                <?php 
                  $clave1 = "cedula";
                  $clave2 = "nombre";
                  $clave3 = "apellido";
                  $clave4 = "";
                  $clave5 = "";
                ?>
              
                <table class="table">

                <thead>
                    
                  <tr>
                    <th <?php echo "id=$clave1" ?> >C&eacute;dula</th>
                    <th <?php echo "id=$clave2" ?> >Nombre</th>
                    <th <?php echo "id=$clave3" ?> >Apellido</th>
                    <th>Acci&oacute;n</th>
                  </tr>
                </thead>
                
                <tbody>                    
                    <?php foreach ($resultados as $row) { 

                    ?>
                      <tr>
                          <td <?php echo "data-columna=$clave1" ?> ><?php echo $row->cedula;?></td>
                          <td <?php echo "data-columna=$clave2" ?> ><?php echo $row->nombre;?></td>
                          <td <?php echo "data-columna=$clave3" ?> ><?php echo $row->apellido;?></td>
                          <td>
                              <button type="button" class="btn btn-default btn-info btn-xs" ><i class="fa fa-pencil"></i></button>
                              <button type="button" class="btn btn-default btn-danger btn-xs" ><i class="fa fa-trash-o"></i></button>                                
                               <!--                          
                              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i></button>
                              -->
                          </td>    
                      </tr>
                    <?php 

                    } ?>
                    
                </tbody>
                    
                    
                </table>
            </div>
             
         </div>
    </div>
</div>



    
<!-- / CONTENIDO -->