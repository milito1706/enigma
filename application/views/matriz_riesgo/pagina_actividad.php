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
      <h3 class="hthin">Configuración de Actividad Económica</h3>        
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
                        <table id="datatable-actividad" class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Actividad</th>
                              <th>Calificación</th>                                                                    
                              <th class="noprint"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ( $actividades as $actividad):?>
                              <tr class="odd gradeX">
                                <td><?= $actividad['actividad_economica'];?></td>
                                <td align="center"><?= $actividad['calificacion'];?></td>                                                                       
                                <td class="center">
                                 <button class="btn btn-primary btn-xs editar_actividad md-trigger noprint" data-id="<?php echo $actividad['Id'];?>" data-persona="<?php echo $actividad['Id'];?>" data-edit="editActividad" data-modal="form-primary-actividad" ><i class="fa fa-pencil"></i></button></td>
                               </tr>
                             <?php endforeach;?>
                           </tbody>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

               <!-- Nifty Modal Actividad Economica -->
               <div id="form-primary-actividad" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">
                <form id="form-actividad">
                  <div class="md-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
                    </div>
                    <div class="modal-body form" id="mb-actividad">

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