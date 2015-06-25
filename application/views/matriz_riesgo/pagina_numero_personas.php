
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
        <h3 class="hthin">Configuración de Número de Personas</h3>        
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
                        <table id="datatable-nopersonas" class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Minimo</th>
                              <th>Maximo</th>
                              <th>Clasificación del Riesgo</th>                                                                
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ( $num_personas as $num_persona):?>
                              <tr class="odd gradeX">
                                <td align="center"><?= $num_persona['r_min'];?></td>
                                <td align="center"><?= $num_persona['r_max'];?></td>                                                                       
                                <td align="center"><?= $num_persona['calificacion'];?></td>                                                                       
                                <td class="center">
                                 <button id="editar_nopersonas" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $num_persona['Id'];?>" data-persona="<?php echo $num_persona['Id'];?>" data-edit="editNoPersonas" data-modal="form-primary-nopersonas" ><i class="fa fa-pencil"></i></button></td>
                               </tr>
                             <?php endforeach;?>
                           </tbody>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

               <!-- Nifty Modal Numero Personas -->
               <div id="form-primary-nopersonas" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">
                <form id="form-nopersonas">
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