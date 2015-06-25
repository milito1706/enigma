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
        <h3 class="hthin">Configuración de Transaccionalidad</h3>        
      </div>
      
      <div class="cl-mcont">
        <div class="row">
          <div class="col-sm-12 col-md-12">            
              <div class="row">
                <div class="col-md-12">
                  <div class="block-flat">
                    <!--<div>
                      <button class="btn btn-sm md-trigger" id="new_producto" data-modal="form-primary-productos"><i class="fa fa-plus-circle fa-2x  pull-left color-success"> </i>Nuevo Producto</button>
                    </div>-->
                    <div class="content">
                      <div>
                        <table id="datatable-transaccionalidad" class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Minimo</th>
                                  <th>Maximo</th>
                                  <th>Clasificación del Riesgo</th>
                                  <th>Divisa</th>                                  
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ( $transaccionalidad as $transaccion):?>
                                  <tr class="odd gradeX">
                                    <td align="right"><?= $transaccion['r_min'];?></td>
                                    <td align="right"><?= $transaccion['r_max'];?></td>
                                    <td align="center"><?= $transaccion['calificacion'];?></td>
                                    <td class="center" align="center"><?= $transaccion['divisa'];?> </td>                                    
                                    <td class="center" align="center">
                                     <button id="editar_transaccionalidad" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $transaccion['Id'];?>" data-persona="<?php echo $transaccion['Id'];?>" data-edit="editTransaccionalidad" data-modal="form-primary-transaccionalidad" ><i class="fa fa-pencil"></i></button></td>
                                   </tr>
                                 <?php endforeach;?>
                               </tbody>
                             </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             
             <!-- Nifty Modal Transaccionalidad -->
              <div id="form-primary-transaccionalidad" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">
                <form id="form-transaccionalidad">
                  <div class="md-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
                    </div>
                    <div class="modal-body form">

                    </div>
                    <div class="modal-footer">
                      <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
                      <button type="submit" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Guardar</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="md-overlay"></div>

          </div>
        </div>        
      </div>
    </div>
  </div>
</body>
</html>