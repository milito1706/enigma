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
      <h3 class="hthin">Riesgo Geográfico por Estados</h3>        
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
                      <div id="divestados">
                        <table id="datatable-estados" class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Estado</th>
                              <th>Calificación</th>                                                                    
                              <th class="noprint"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ( $estados as $estado):?>
                              <tr class="odd gradeX">
                                <td><?= $estado['nombre_estado'];?></td>
                                <td align="center"><?= $estado['calificacion'];?></td>                                                                       
                                <td class="center">
                                 <button class="btn btn-primary btn-xs editar_estado md-trigger noprint" data-id="<?php echo $estado['Id'];?>" data-edit="editEstado" data-modal="form-primary-estado" ><i class="fa fa-pencil"></i></button></td>
                               </tr>
                             <?php endforeach;?>
                           </tbody>
                         </table>
                       </div>
                      <div id="chart_div">
                        
                      </div>

                     </div>
                   </div>
                 </div>
               </div>

               <!-- Nifty Modal Actividad Economica -->
               <div id="form-primary-estado" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">
                <form id="form-estado">
                  <div class="md-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
                    </div>
                    <div class="modal-body form" id="mb-estado">

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
    <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
       google.load('visualization', '1', {'packages': ['geochart']});
       google.setOnLoadCallback(drawMarkersMap);

        function drawMarkersMap() {
        var data = google.visualization.arrayToDataTable([
          ['City',   'Factor Riesgo'],
          <?php foreach($estados as $estado):?>
            ['<?= $estado['nombre_estado'];?>',<?= $estado['calificacion'];?>],
        <?php endforeach;?>
        ]);

        var options = {
          region: 'MX',
          displayMode:'markers',
          colorAxis: {colors: ['#00853f', 'yellow', '#e31b23']},
        };

        var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      };
    </script>
  </body>
  </html>