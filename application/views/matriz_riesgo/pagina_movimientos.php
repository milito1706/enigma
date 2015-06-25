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
        <h3 class="hthin">Configuración de Movimientos</h3>        
      </div>
      
      <div class="cl-mcont">
        <div class="row">
          <div class="col-sm-12 col-md-12">            
            <div class="row">
              <div class="col-md-12">
                <div class="block-flat">
                    <div class="butpro  btn btn-sm md-trigger" id="new_movimiento" data-modal="form-primary-movimiento">
                          <i class="fa fa-plus-circle fa-2x  pull-left color-success"> </i>Nuevo Movimiento
                        </div>
                    <div class="content">
                      <div>
                        <table id="datatable-movimientos" class="table no-border blue">
                          <thead>
                            <tr>
                              <th>Nombre</th>                                  
                              <th>Clasificación</th>                                                            
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ( $movimientos as $movimiento):?>
                              <tr class="odd gradeX">
                                <td><?php echo $movimiento['etiqueta'];?></td>
                                <td align="center"><?= $movimiento['calificacion'];?></td>                                                                      
                                <td class="center">
                                 <button id="editar_movimiento" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $movimiento['Id'];?>" data-persona="<?php echo $movimiento['Id'];?>" data-edit="editMovimiento" data-modal="form-primary-movimiento" ><i class="fa fa-pencil"></i></button></td>
                               </tr>
                             <?php endforeach;?>
                           </tbody>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               
               <!-- Nifty Modal Movimientos -->
               <div id="form-primary-movimiento" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">
                 <form id="form-movimientos">
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
                </div>
                <div class="md-overlay"></div>
              </form>        

            </div>
          </div>        
        </div>
      </div>
    </div>
  </body>
  </html>