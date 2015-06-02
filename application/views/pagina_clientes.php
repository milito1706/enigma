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
            <div class="col-md-4">
                  <div class="block-flat">
                    <div class="content no-padding">
                      <div class="overflow-hidden"><i class="fa fa-area-chart fa-4x pull-left color-primary"></i>
                        <h3 class="no-margin">Expedientes</h3>
                        <p class="color-primary">Numero Total</p>
                      </div>
                      <h1 class="no-margin big-text"><?= $count_clientes;?></h1>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="block-flat">
                    <div class="content no-padding">
                      <div class="overflow-hidden"><i class="fa fa-line-chart fa-4x pull-left color-success"></i>
                        <h3 class="no-margin">Persona Fisica</h3>
                        <p class="color-success">Numero Total</p>
                      </div>
                      <h1 class="big-text no-margin"><?= $count_personas_fisica;?></h1>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="block-flat">
                    <div class="content no-padding">
                      <div class="overflow-hidden"><i class="fa fa-line-chart fa-4x pull-left color-success"></i>
                        <h3 class="no-margin">Persona Moral</h3>
                        <p class="color-success">Numero Total</p>
                      </div>
                      <h1 class="big-text no-margin"><?= $count_personas_moaral;?></h1>
                    </div>
                  </div>
                </div> 
          <div class="row">
                    <div class="col-md-12">
                        <div class="block-flat">
                            <div class="header">                            
                                <h2>Clientes</h2>
                            </div>
                            <div class="content">
                                <div>
                                    <table class="table table-bordered" id="datatable-clientes" >
                                        <thead>
                                            <tr>
                                                <th>Nombre Cliente</th>
                                                <th>RFC</th>
                                                <th>Tipo de Persona</th>
                                                <th>Abrir Cliente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php foreach ( $empleados as $cliente):?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $cliente['T1']." ".$cliente['T2']." ".$cliente['T3'];?></td>
                                                <td><?php echo $cliente['T19'];?></td>
                                                <td><?php echo $cliente['tipo'];?></td>                                            
                                              <td class="center">
                                             <button id="id_credito" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $cliente['Id'];?>"><i class="fa fa-pencil"></i></button></td>
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
    </body>
</html>



