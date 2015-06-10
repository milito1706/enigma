<html>
    <head>
      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
     google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'TOTAL'],
        <?php foreach($graficar as $data_grafica):?>
          ["<?php echo $data_grafica['tipo_credito'];?>", <?php echo $data_grafica['suma']; ?>],
        <?php endforeach;?>
        ]);

        var options = {
          title: '',
          width: 'auto',
          legend: { position: 'none' },
          chart: { subtitle: '' },
          vAxis: {format: 'currency'},
          axes: {
            x: {
              0: { side: 'top', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
       
      };

    </script> 
    </head>
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
                    <h1 class="name"><?php echo $data_cliente['T1']." ".$data_cliente['T2']." ".$data_cliente['T3'] ?></h1>
                    <p class="description"><?php if ($data_cliente['T52']){ echo 'CURP: '.$data_cliente['T52'];} ?></p>
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
                      <td><strong>Detalle</strong></td>
                      <td class="center">
                          <button class="btn  btn-xs md-trigger"data-modal="modal-tab_detalle" ><i class="fa fa-info-circle fa-4x  color-primary"></i></button></td>
                      </tr>
                    </tbody>
                    <?php };?>
                  </table>
                </div>
              </div>
            </div>
             <div id="modal-tab_detalle" class="md-modal colored-header custom-width md-effect-8">
      <div class="md-content">
        <div class="modal-header">
          <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
        </div>
          <div class="modal-body form">
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
        </div>
      </div>
    </div>
    <div class="md-overlay"></div>
  </div>  
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="tab-container">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Crédito</a></li>
                <li><a data-toggle="tab" href="#friends"> Acumulado de Movimientos</a></li>
              </ul>
              <div class="tab-content">
                <div id="home" class="tab-pane active cont">
                  <div class="row">
                    <div class="col-md-12">
                      <table id="datatable" class="table table-bordered">
                        <thead>
                        <div class="butpro butstyle-credit btn-sm md-trigger" id="new_moral"  data-persona="MORAL" data-new="newClient" data-modal="form-primary-creditos">
                        <i class="fa fa-plus-circle fa-2x  pull-left color-success"> </i>Nuevo Crédito
                        </div>
                          <tr>
                            <th>Crédito</th>
                            <th>Monto</th>
                            <th>Moneda</th>
                            <th>Inicio</th>
                            <th>Termino</th>
                            <th>Tipo Crédito</th>
                            <th>Limite Cuota</th>

                            <th></th>                          
                          </tr>
                        </thead>
                        <tbody>
                           
                          <tr class="odd gradeX">
                          <?php foreach ($clientes_creditos as $data_creditos) {?>
                            <td><?php echo $data_creditos['no_credito'];?></td>
                            <td><?php echo number_format ($data_creditos['T1'],2);?></td>
                            <td><?php echo $data_creditos['tipo_moneda'];?></td>
                            <td class="center"><?php echo $data_creditos['T3'];?></td>
                            <td class="center"><?php echo $data_creditos['T4'];?></td>
                            <td class="center"><?php echo $data_creditos['tipo_credito'];?></td>
                            <td class="center"><?php echo number_format ($data_creditos['T2'],2);?></td>

                            <td class="center"><button data-modal="form-primary-creditos" class="btn btn-primary  btn-sm md-trigger"><i class="fa fa-folder-open"></i></button></td>
                          </tr>
                          <?php };?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div id="friends" class="tab-pane cont">
                <table id="datatable-creditos" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Rendering engine</th>
                          <th>Browser</th>
                          <th>Platform(s)</th>
                          <th>Engine version</th>
                          <th>CSS grade</th>
                        </tr>
                      </thead>
                     </tbody>
                        <tr class="gradeU">
                          <td>Other browsers</td>
                          <td>All others</td>
                          <td>-</td>
                          <td class="center">-</td>
                          <td class="center">U</td>
                        </tr>
                      </tbody>
                    </table> 
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8">
            <div class="block-transparent">                
              <div class="block-flat">
                <div class="header">
                  <h3>Analisis de Créditos.</h3>
                </div>
                <div class="content">
                  <div id="top_x_div" style="height: 180px; padding: 0px; position: relative;"></div>
                </div>
              </div>
            </div>
            <div class="block-transparent">
              <div class="header">
                <h4>Análisis de riesgo</h4>
              </div>
              <div class="list-group todo list-widget">
               


                <li href="#" class="list-group-item"><span class="date"><?php foreach($r_estado as $dat_restado){ $dat1=$dat_restado['calificacion']; $dat1_estado=$dat_restado['estado'];} if(isset($dat1,$dat1_estado)){ echo $dat1; ?> </span>Factor de riesgo de estado - <?php echo $dat1_estado;} else { ?> </span>Factor de riesgo de estado  -  <?php  $dat1=0;  echo ' Informacion en  expediente incorrecta'; }?></li>
                <li href="#" class="list-group-item"><span class="date"><?php foreach($r_pais as $dat_pais){ $dat2=$dat_pais['calificacion']; $dat2_pais=$dat_pais['pais'];} if(isset($dat2,$dat2_pais)){ echo $dat2;?> </span>Factor de riesgo de pais - <?php echo $dat2_pais;} else { ?> </span>Factor de riesgo de pais  -  <?php  $dat2=0;  echo ' Informacion en  expediente incorrecta'; }?></li>
                <li href="#" class="list-group-item"><span class="date"><?php foreach($r_actividad as $dat_act){ $dat3=$dat_act['calificacion']; $dat3_act=$dat_act['actividad'];} if(isset($dat3,$dat3_act)){ echo $dat3;?> </span>Factor de riesgo de actividad economica - <?php echo $dat3_act;} else { ?> </span>Factor de riesgo de actividad economica  -  <?php  $dat3=0;  echo ' Informacion en  expediente incorrecta'; }?></li>
                <li href="#" class="list-group-item"><span class="date"><?php foreach($r_tipopersona as $dat_per){ $dat4=$dat_per['calificacion']; $dat4_per=$dat_per['nombre'];} if(isset($dat4,$dat4_per)){ echo $dat4;?> </span>Factor de riesgo por tipo de persona - <?php echo $dat4_per;} else { ?> </span>Factor de riesgo por tipo de persona -  <?php  $dat4=0;  echo ' Informacion en  expediente incorrecta'; }?></li>             
                <li href="#" class="list-group-item"><span class="date"> <strong><?php echo $suma=$dat1+$dat2+$dat3+$dat4;?></strong></span> <strong>Total</strong></li>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="block-flat bars-widget">
              <div class="spk4 pull-right spk-widget"></div>
              <h4>Total Alertas</h4>
              <p>Operaciones Inusuales</p>
              <h3><?= $total_oi?></h3>
            </div>
            <div class="block-flat bars-widget">
              <div class="spk5 pull-right spk-widget"></div>
              <h4>Total Alertas</h4>
              <p>Operaciones Relevantes</p>
              <h3><?= $total_or?></h3>
            </div>
            <div class="block-flat bars-widget">
              <div class="spk4 pull-right spk-widget"></div>
              <h4>Total Alertas</h4>
              <p>Operaciones Internas Preocupantes</p>
              <h3><?= $total_ip?></h3>
            </div>
            <div class="block-flat bars-widget">
              <div class="spk5 pull-right spk-widget"></div>
              <h4>Total Alertas</h4>
              <p>Operaciones Reportes Urgentes de 24hrs</p>
              <h3><?= $total_kyc?></h3>
            </div>              
          </div>
        </div>         

      </div>
    </div>
    <!-- Nifty Modal Creditos-->
    <form id="form-creditos" method="POST">
    <div id="form-primary-creditos" class="md-modal colored-header custom-width-creditos md-effect-8">
      <div class="md-content">
        <div class="modal-header">
          <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
        </div>
          <div class="modal-body form">
          <input type="hidden" name="id_expediente" id="id_expediente" value="<?php if(isset($id_expediente)){echo$id_expediente;}?>">
          <?php $this->load->view('formularios_clientes/form_creditos');?>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
           <button type="submit" class="btn btn-primary btn-flat md-close" data-dismiss="modal">Guardar</button>
        </div>
      </div>
    </div>
    <div class="md-overlay"></div>
  </div>  
  </form>
</body>
</html>