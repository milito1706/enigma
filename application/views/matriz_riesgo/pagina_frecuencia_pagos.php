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
        <h3 class="hthin">Configuración de Frecuencia de Pagos</h3>        
      </div>
      
      <div class="cl-mcont">
        <div class="row">
          <div class="col-sm-12 col-md-12">            
              <div class="row">
                <div class="col-md-12">
                  <div class="block-flat">
                    
                    <div>
                      <button class="btn btn-sm btn-default md-trigger" id="new_frecuencia_pago" data-modal="form-primary-frecuencia"><i class="fa fa-plus-circle fa-2x  pull-left color-success"> </i>Nuevo Frecuencia de Pago</button>
                    </div>
                    <div class="content">
                      <div>
                        <table id="datatable-frecuencia" class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Unidad de Credito</th>
                                  <th>Números de Pagos</th>                      
                                  <th class="noprint"></th>
                                </tr>
                              </thead>
                              <tbody id="listaFrecuneciaPagos">
                                <?php foreach ( $frecuencia_pagos as $frecuencia_pago):?>
                                  <tr class="odd gradeX">
                                    <td><?= $frecuencia_pago['unidad_credito'];?></td>
                                    <td align="center"><?= $frecuencia_pago['frecuencia_pago'];?></td>                                
                                    <td class="center">
                                     <button class="btn btn-primary btn-xs editar_frecuencia_pago md-trigger noprint" data-id="<?php echo $frecuencia_pago['id'];?>" data-edit="editFrecuencia" data-modal="form-primary-frecuencia" ><i class="fa fa-pencil"></i></button>
                                    </td>
                                   </tr>
                                 <?php endforeach;?>
                                 
                               </tbody>
                             </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             
             <!-- Nifty Modal Frecuencia de Pago -->
             <div id="form-primary-frecuencia" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">

              <div class="md-content">
                <form id="form-frecuencia-pago" data-parsley-validate>
                  <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
                  </div>
                  <div class="modal-body form" id="mb-frecuencia">

                  </div>
                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
                    <button type="submit" data-dismiss="modal" class="btn btn-primary" id="btn-submit">Guardar</button>
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