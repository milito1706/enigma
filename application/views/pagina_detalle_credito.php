<!DOCTYPE html>
<html lang="es">
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
      <div class="cl-mcont">
        <div class="row">
          <div class="col-sm-12">
            <div class="block-flat profile-info">
            <?php foreach ($datos_clientes as $data_cliente) {  $id_expediente= $data_cliente['Id']  ?>
              <div class="row">
                <div class="col-sm-2">
                  <div class="avatar"><img src="<?=base_url('assets/img/bajo-riesgo.png')?>" width="130" class="profile-avatar"></div>
                </div>
                <div class="col-sm-7">
                  <div class="personal">
                    <h1 class="name"><?= $credito;?></h1>
                    <p class="description"><?php echo $data_cliente['T1']." ".$data_cliente['T2']." ".$data_cliente['T3'];  ?></p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <table class="no-border no-strip skills">
                    <tbody class="no-border-x no-border-y">
                      <tr>
                        <td style="width:45%;"><strong>STATUS</strong></td>
                        <td>
                          <?php echo $data_cliente['estado'];?>
                        </td>
                      </tr>
                      <tr>
                        <td><strong>TIPO</strong></td>
                        <td>
                          <?php echo $data_cliente['tipo'];?>
                        </td>
                      </tr>
                      <tr>
                        <td><strong>RFC</strong></td>
                        <td>
                          <?php echo $data_cliente['T19'];?>
                        </td>
                      </tr>
                      <tr>
                    </tbody>
                    <?php };?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        <div class="row">
          <div class="col-sm-12">
            <div class="tab-container">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Crédito</a></li>
                <li><a data-toggle="tab" href="#friends">Movimientos</a></li>
                <li><a data-toggle="tab" href="#settings">Alertas</a></li>
              </ul>
              <div class="tab-content">
                <div id="home" class="tab-pane active cont">
                  <div class="row">
                    <div class="col-md-12">
                      <table  class="no-border blue">
                        <thead>
                          <tr>
                            <th>Crédito</th>
                            <th>Monto</th>
                            <th>Moneda</th>
                            <th>Inicio</th>
                            <th>Termino</th>
                            <th>Tipo Crédito</th>
                            <th>Limite Cuota</th>
                            <th>Estado</th>
                            <th></th>                   
                          </tr>
                        </thead>
                        <tbody>
                      <?php foreach ($clientes_creditos as $data_creditos) { $id_credito=$data_creditos['Id'];   $limite_cuota=$data_creditos['T2'];?>
                          <tr class="odd gradeX">
                            <td><?php echo $data_creditos['no_credito'];?></td>
                            <td><?php echo number_format ($data_creditos['T1'],2);?></td>
                            <td><?php echo $data_creditos['tipo_moneda'];?></td>
                            <td class="center"><?php echo $data_creditos['T3'];?></td>
                            <td class="center"><?php echo $data_creditos['T4'];?></td>
                            <td class="center"><?php echo $data_creditos['tipo_credito'];?></td>
                            <td class="center"><?php echo number_format ($data_creditos['T2'],2); ?></td>
                            <td class="center"><?php echo $data_creditos['Estado'];?></td>
                            <td class="center"> <button id='editar_credito'  data-modal="form-primary-creditos" class="btn btn-primary btn-sm md-trigger" data-idcredito="<?php echo $data_creditos['no_credito']; ?>"><i class="fa fa-pencil"></i></button></td>
                          </tr>
                          <?php };?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div id="friends" class="tab-pane cont">
                  <table id="datatable-movimientos" class="no-border blue">
                     <thead>
                     <div class="butpro butstyle-credit btn-sm md-trigger"  data-modal="form-primary-movimientos">
                        <i class="fa fa-plus-circle fa-2x  pull-left color-success"> </i>Movimiento
                        </div>
                      <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Tipo Cargo</th>
                        <th>Origen Cargo</th>
                        <th>Monto</th>
                        <th>Moneda</th>
                        <th>Observaciones</th>              
                        <th></th>                          
                      </tr>
                    </thead>
                    <tbody>
                     <?php foreach ($clientes_movimientos as $dat_mov){?>
                      <tr class="odd gradeX">
                        <td><?php echo $dat_mov['num_movimiento'];?></td>
                        <td><?php echo $dat_mov['T2'];?></td>
                        <td><?php echo $dat_mov['tipo_cargo'];?></td>
                        <td class="center"><?php echo $dat_mov['origen_pago'];?></td>
                        <td class="center"><?php echo $dat_mov['T1'];?></td>
                        <td class="center"><?php echo $dat_mov['tipo_moneda'];?></td>
                        <td class="center"><?php echo $dat_mov['T3'];?> </td>
                        <td class="center"><button  data-modal="form-primary-movimientos" class="btn btn-primary btn-sm md-trigger"><i class="fa fa-pencil"></i></button></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>                    
                </div>
                <div id="settings" class="tab-pane">
                  <table id="datatable-alertas"  class="no-border blue">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Emisión</th>
                        <th>Cliente</th>
                        <th>Motivo Alerta</th>
                        <th>Status</th>
                        <th></th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr class="odd gradeX">
                        <td>1</td>
                        <td>2015-05-22 08:30:05</td>
                        <td>SOLUCIONES INTEGRALES EN PERSONAL MA S DE RL DE CV </td>
                        <td class="center"> Se excedió el límite de cuota estimado : 780171.735 Monto registrado 45000000 # Movimiento 7 con fecha 2015-05-22</td>
                        <td class="center"> PENDIENTE</td>                          
                        <td class="center"><button data-modal="form-primary-alertas" class="btn btn-primary btn-sm md-trigger"><i class="fa fa-pencil"></i></button></td>
                      </tr>
                      <tr class="even gradeC">
                        <td>2</td>
                        <td>2015-05-22 08:30:05</td>
                        <td>SOLUCIONES INTEGRALES EN PERSONAL MA S DE RL DE CV </td>
                        <td class="center"> Se excedió el límite de cuota estimado : 780171.735 Monto registrado 45000000 # Movimiento 7 con fecha 2015-05-22</td>
                        <td class="center"> PENDIENTE</td>                          
                        <td class="center"><button data-modal="form-primary-alertas" class="btn btn-primary btn-sm md-trigger"><i class="fa fa-pencil"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="row">
          <div class="col-sm-12">
            <div class="block-transparent">                
              <div class="block-flat">
                <div class="header">
                  <h3>Análisis de Movimientos</h3>
                </div>
                <div class="content">
                    <div id="chart_div" style="height: 280px; padding: 0px; position: relative;"></div>
                </div>
              </div>
            </div>
            <div class="block-transparent">
              <div class="header">
                <h4>Análisis de riesgo</h4>
              </div>
              <div class="list-group todo list-widget">
                <li href="#" class="list-group-item"><span class="date"> 1</span> Riesgo geográfico - DF</li>
                <li href="#" class="list-group-item"><span class="date"> 1</span> Riesgo país - MEXICO</li>
                <li href="#" class="list-group-item"><span class="date"> 3</span> Riesgo actividad - SERVICIOS DE ADMINISTRACIÓN PÚBLICA, DEFENSA Y SEGURIDAD SOCIAL</li>
                <li href="#" class="list-group-item"><span class="date"> 2</span> Riesgo tipo persona - FISICA</li>                
                <li href="#" class="list-group-item"><span class="date"> <strong>7</strong></span> <strong>Total</strong></li>
              </div>
            </div>
    <!-- Nifty Modal Creditos-->
    <div id="form-primary-creditos" class="md-modal colored-header custom-width-creditos md-effect-11">
     <form id="form-creditos" method="POST">
      <div class="md-content">
        <div class="modal-header">
          <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
        </div>
          <div id='cre' class="modal-body form">
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
           <button type="submit" class="btn btn-primary btn-flat md-close" data-dismiss="modal">Guardar</button>
        </div>
      </div>
    </div>
    <!-- Nifty Modal Movimientos-->
    <div id="form-primary-movimientos" class="md-modal colored-header custom-width md-effect-11">
      <div class="md-content">
        <div class="modal-header">
          <h3>Editar datos del movimiento</h3>
          <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
        </div>
        <form id="form-movimientos">
          <div class="modal-body form">
            <?php  $this->load->view('formularios_clientes/form_movimientos');?>
          </div>
            </div>          
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancel</button>
          <button type="button" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Proceed</button>
        </div>
      </div>
    </div>
    <!-- Nifty Modal Alertas-->
    <div id="form-primary-alertas" class="md-modal colored-header custom-width-alertas md-effect-11">
      <div class="md-content">
        <div class="modal-header">
          <h3>Responder Alerta</h3>
          <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
        </div>
        <form id="form-alertas">
          <div class="modal-body form">
            <div class="row">

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Tipo de alerta</label>
                  <input type="text" placeholder="OI" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Número de alerta</label>
                  <input type="text" placeholder="OI" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Fecha y hora de la alerta</label>
                  <input type="text" placeholder="OI" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Descripción de la alerta</label>
                  <textarea name="" id="" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Origen de la alerta</label>
                  <input type="text" name="T1" id="T1" placeholder="OI" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Estado de la alerta</label>
                  <input type="text" placeholder="OI" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Crédito</label>
                  <input type="text" placeholder="OI" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Comentarios y Seguimiento</label>
                  <textarea name="comentarios" class="form-control"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="radio-inline">
                    <input type="radio" id="RadioButton1" name="R1" class="icheck"> Pendiente
                  </label>
                  <label class="radio-inline">
                    <input type="radio" id="RadioButton2" name="R1" class="icheck"> En proceso de resolución
                  </label>
                  <label class="radio-inline">
                    <input type="radio" id="RadioButton3" name="R1" class="icheck"> Resuelta
                  </label>
                  <label class="radio-inline">
                    <input type="radio" id="RadioButton4" name="R1" class="icheck"> Para envío en reporte PLD
                  </label>

                </div>
              </div>
            </div>        
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancel</button>
          <button type="button" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Proceed</button>
        </div>
      </div>
    </div>
    <div class="md-overlay"></div>
  </div>
  </body>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Fecha', 'Monto Movimientos', 'Cuota Pactada'],
         <?php foreach($clientes_movimientos as $datmov):?>
          ['<?php echo $datmov["num_movimiento"];?>',<?php echo $datmov["T1"];?>,<?php echo $limite_cuota;?>],
      <?php endforeach;?>
        ]);

        var options = {
          title: 'Análisis de Movimientos.',
          hAxis: {title: '# Movimiento.',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
     //chartArea:{left:20,top:0,width:'50%',height:'75%'}
      }
    </script>
  </html>