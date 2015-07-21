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
        <h3 class="hthin">Configuración de Tipo Persona</h3>        
      </div>
      
      <div class="cl-mcont">
        <div class="row">
          <div class="col-sm-12 col-md-12">            
            <div class="row">
              <div class="col-md-12">
                <div class="block-flat">
                  <div class="butpro  btn btn-sm md-trigger" id="new_tipo_persona" data-modal="form-primary-tipo-persona">
                    <i class="fa fa-plus-circle fa-2x  pull-left color-success"> </i>Nuevo Tipo de Persona
                  </div>
                  <div class="content">
                    <div>
                      <table id="datatable-tipo_persona" class="table table-bordered datatable no-border blue">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Calificación</th>                                                                    
                            <th class="noprint"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ( $tipo_personas as $tipo_persona):?>
                            <tr class="odd gradeX">
                              <td><?= $tipo_persona['etiqueta'];?></td>
                              <td align="center"><?= $tipo_persona['codigo'];?></td>                                                                       
                              <td class="center">
                               <button class="btn btn-primary btn-xs editar_tipo_persona md-trigger noprint" data-id="<?php echo $tipo_persona['Id'];?>" data-edit="editTipoPersona" data-modal="form-primary-tipo-persona" ><i class="fa fa-pencil"></i></button></td>
                             </tr>
                           <?php endforeach;?>
                         </tbody>
                       </table>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             
             <!-- Nifty Modal Tipo de Persona -->
             <div id="form-primary-tipo-persona" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">
              <form id="form-tipo-persona">
                <div class="md-content">
                  <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
                  </div>
                  <div class="modal-body form" id="mb-tipo-persona">

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