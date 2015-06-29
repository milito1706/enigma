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
                      <button class="btn btn-default btn-sm md-trigger" id="new_frecuencia_pago" data-modal="form-primary-frecuencia-pago">Nuevo Frecuencia de Pago</button>
                    </div>
                    <div class="content">
                      <div>
                        <table id="datatable-frecuencia" class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Unidad de Credito</th>
                                  <th>Números de Pagos</th>                      
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody id="listaFrecuneciaPagos">
                                <?php foreach ( $frecuencia_pagos as $frecuencia_pago):?>
                                  <tr class="odd gradeX">
                                    <td><?= $frecuencia_pago['unidad_credito'];?></td>
                                    <td align="center"><?= $frecuencia_pago['frecuencia_pago'];?></td>                                
                                    <td class="center">
                                     <button id="editar_frecuencia_pago" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $frecuencia_pago['id'];?>" data-persona="<?php echo $frecuencia_pago['unidad_credito'];?>" data-edit="editFrecuencia" data-modal="form-primary-frecuencia-pago" ><i class="fa fa-pencil"></i></button>
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
              <div id="form-primary-frecuencia-pago" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">
                <form id="form-frecuencia-pago">
                  <div class="md-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
                    </div>
                    <div id="mbfrecuencia" class="modal-body form">

                    </div>
                    <div class="modal-footer">
                      <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
                      <button type="submit" data-dismiss="modal" class="btn btn-primary" id="btn-submit">Guardar</button>
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