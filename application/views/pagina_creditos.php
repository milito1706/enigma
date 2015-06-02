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
    
 <div class="container-fluid" id="pcont">
    <div class="cl-mcont">
        <!-- Content -->
        <div class="stats_bar">
        <div class="butpro butstyle">
        <div class="sub">
            <h2>Creditos</h2>
        <span><?= $count_creditos;?></span>
        <div class="stat"><span class="fa fa-credit-card fa-2x"></span></div>
            </div>
  </div>
<div class="butpro butstyle md-trigger" id="new"  data-persona="FISICA" data-new="newClient" data-modal="modal-tab" >
    <div class="sub">
      <h2>ACtivos</h2>
      <span><?= $count_creditos_activos;?></span></div>
        <div class="stat"><span class="fa fa-unlock fa-2x"></span></div>
  </div>
 <div class="butpro butstyle md-trigger" id="new_moral"  data-persona="MORAL" data-new="newClient" data-modal="modal-tab" >
    <div class="sub">
      <h2>Finalizados</h2>
      <span><?= $count_creditos_finalizados; ?></span></div>
    <div class="stat"><span class="fa fa-lock fa-2x"> </span></div>
  </div>
  
<div class="row">
                <div class="col-md-12">
                    <div class="block-flat">
                        <div class="header">                            
                            <h2>Creditos</h2>
                        </div>
                        <div class="content">
                            <div>
                                <table class="table table-bordered" id="datatable-icons" >
                                    <thead>
                                        <tr>
                                            <th>No Credito</th>
                                            <th>Estado</th>
                                            <th>Abrir</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php foreach ( $creditos as $credito):?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $credito['no_credito'];?></td>
                                            <td><?php echo $credito['Estado'];?></td>                                            
                                          <td class="center">
                                         <button id="editar" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $credito['Id'];?>" data-persona="<?php echo $credito['tipo_credito'];?>" data-edit="editClient" data-modal="modal-tab" ><i class="fa fa-pencil"></i></button></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                              </table>                  
                          </div>
                        </div>
                    </div>              
                </div>
         </div>
     </div>
              <div class="md-modal colored-header custom-width2 md-effect-9" id="modal-tab">
        <div class="md-content">
          <div class="modal-header">
            
            <h3></h3>
            <button type="button" class="close md-close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body form">
        
        
          </div>
          <div class="modal-footer">
           
            <button type="submit" name="submit" class="btn btn-default btn-flat md-close" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary btn-flat md-close" data-dismiss="modal">Guardar</button>
          </div>
        </div>
      </div>
      <!-- Nifty Modal -->
<div class="md-overlay"> </div> 
        </div>
      </div> 
    </div>
</body>


</html>



