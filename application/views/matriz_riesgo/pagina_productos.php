<html>
<body>
  <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <!-- Main Menu -->
    <?php $this->load->view('menu_arriba');?>
  </div>

  <div id="cl-wrapper">

    <div class="cl-sidebar">
      <!-- Sidebar Menu -->
      <?php $this->load->view('menu_left');?>
    </div>
    <div id="pcont" class="container-fluid">
      <div class="page-head">
        <h3 class="hthin">Configuración de Productos</h3>        
      </div>
      
      <div class="cl-mcont">
        <div class="row">
          <div class="col-sm-12 col-md-12">            
              <div class="row">
                <div class="col-md-12">
                  <div class="block-flat">
                    <div>
                      <button class="btn btn-sm md-trigger" id="new_producto" data-modal="form-primary-productos"><i class="fa fa-plus-circle fa-2x  pull-left color-success"> </i>Nuevo Producto</button>
                    </div>
                    <div class="content">
                      <div>
                        <table data-order='[[ 1, "desc" ]]' id="tabla-productos" class="table table-bordered datatable">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Tolerancia Cuota</th>
                              <th>Tolerancia Cuota Interes</th>
                              <th>Min. Crédito</th>
                              <th>Max. Crédito</th>
                              <th class="noprint"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ( $productos as $producto):?>
                              <tr class="odd gradeX">
                                <td><?php echo $producto['Nombre_Producto'];?></td>
                                <td class="center" align="right"><?php echo $producto['tolerancia_cuota'];?></td>
                                <td class="center" align="right"><?= number_format($producto['tiempo_liquidacion'],2);?></td>
                                <td class="center" align="right"><?= number_format($producto['min_monto'],2);?> </td>
                                <td class="center" align="right"><?= number_format($producto['max_monto'],2);?></td>
                                <td class="center noprint">
                                 <button id="edit_producto" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $producto['Id'];?>" data-edit="editProducto" data-modal="form-primary-productos" ><i class="fa fa-pencil"></i></button></td>
                               </tr>
                             <?php endforeach;?>

                           </tbody>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             
             <!-- Nifty Modal Productos -->
             <div id="form-primary-productos" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">

              <div class="md-content">
                <form id="form-productos">
                  <div class="modal-header">          
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
                  </div>
                  <div class="modal-body form" id="mb-nuevo-producto">

                  </div>
                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
                    <button type="submit" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Guardar</button>
                  </div>
                </form>
              </div>

            </div>
            <div class="md-overlay"></div>
          </div>
        </div>        
      </div>
    </div>
  </div>
</body>
</html>