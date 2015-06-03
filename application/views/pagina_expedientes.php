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
            <h2>Expedientes</h2>
        <span><?= $count_clientes;?></span>
            </div>
        <div class="stat"><span class="equal"></span></div>
  </div>
<div class="butpro butstyle md-trigger" id="new"  data-persona="FISICA" data-new="newClient" data-modal="modal-tab" >
    <div class="sub">
      <h2>Persona Fisica</h2>
      <span><?= $count_personas_fisica;?></span></div>
    <div class="stat"><span class="fa fa-users fa-2x"></span></div>
  </div>
 <div class="butpro butstyle md-trigger" id="new_moral"  data-persona="MORAL" data-new="newClient" data-modal="modal-tab" >
    <div class="sub">
      <h2>Persona Moral</h2>
      <span><?= $count_personas_moaral; ?></span></div>
    <div class="stat"><span class="fa fa-users fa-2x"> </span></div>
  </div>
  </div>
  
<div class="row">
                <div class="col-md-12">
                    <div class="block-flat">
                        <div class="header">                            
                            <h2>Expedientes</h2>
                        </div>
                        <div class="content">
                            <div>
                                <table class="table table-bordered" id="datatable-expedientes" >
                                    <thead>
                                        <tr>
                                            <th>Tipo de Persona</th>
                                            <th>Nombre Cliente</th>
                                            <th>Fecha</th>
                                            <th>F.Riesgo</th>
                                            <th>F.Estado</th>
                                            <th>Abrir Expediente</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php foreach ( $empleados as $cliente):?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $cliente['tipo'];?></td>
                                            <td><?php echo $cliente['T1']." ".$cliente['T2']." ".$cliente['T3'];?></td>
                                            <td><?php echo $cliente['log_fecha'];?></td>
                                            <td class="center"><?php echo $cliente['F_riesgo'];?> </td>
                                            <td class="center"><?php echo $cliente['estado'];?></td>
                                          <td class="center">
                                         <button id="editar" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $cliente['Id'];?>" data-persona="<?php echo $cliente['tipo'];?>" data-edit="editClient" data-modal="modal-tab" ><i class="fa fa-pencil"></i></button></td>
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
     <form  id="frmnewproduct" method="post">
              <div class="md-modal colored-header-encabezado custom-width-expedientes md-effect-9" id="modal-tab">
        <div class="md-content">
          <div class="modal-header">
            <h3></h3>
            <button type="button" class="close md-close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body form">
          </div>
          <div class="modal-footer">
           
            <button type="button" class="btn btn-default btn-flat md-close" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary btn-flat md-close" data-dismiss="modal">Guardar</button>
          </div>
        </div>
      </div>
      <!-- Nifty Modal -->
<div class="md-overlay"> </div> 
        </div>
      </div> 
    </div>
</form>
</body>
</html>







