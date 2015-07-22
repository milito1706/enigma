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
    <h2>Alertas Resueltas</h2>    
  </div>
  <div class="cl-mcont">
    <div class="row">
      <div class="col-md-12">
        <div class="block-flat">
          <div class="header">
            <h3>Operaciones Inusuales Resueltas</h3>
          </div>
          <div class="content">
            <div>
              <table id="datatable-oi" class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Fecha de emisión</th>
                    <th>Nombre del Cliente</th>
                    <th>Motivo de Alerta</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ( $alertasOIR as $OIR):?>
                  <tr class="odd gradeX">
                    <td><?= $OIR['Id']; ?></td>
                    <td><?= $OIR['fecha_emision']; ?></td>
                    <td><?= $OIR['no_credito']; ?></td>
                    <td class="center"><?= $OIR['alerta']; ?></td>
                    <td class="center"><?= $OIR['estado']; ?></td>
                    <td></td>
                  </tr>
                  <?php endforeach;?>                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="block-flat">
          <div class="header">
            <h3>Operaciones Relevantes Resueltas</h3>
          </div>
          <div class="content">
            <div>
              <table id="datatable-or" class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Fecha de emisión</th>
                    <th>Nombre del Cliente</th>
                    <th>Motivo de Alerta</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ( $alertasORR as $ORR):?>
                  <tr class="odd gradeX">
                    <td><?= $ORR['Id']; ?></td>
                    <td><?= $ORR['fecha_emision']; ?></td>
                    <td><?= $ORR['no_credito']; ?></td>
                    <td class="center"><?= $ORR['alerta']; ?></td>
                    <td class="center"><?= $ORR['estado']; ?></td>
                    <td></td>
                  </tr>
                  <?php endforeach;?>                                    
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="block-flat">
          <div class="header">
            <h3>Operaciones Internas Preocupantes Resueltas</h3>
          </div>
          <div class="content">
            <div>
              <table id="datatable2" class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Fecha de emisión</th>
                    <th>Nombre del Cliente</th>
                    <th>Motivo de Alerta</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ( $alertasIPR as $IPR):?>
                  <tr class="odd gradeX">
                    <td><?= $IPR['Id']; ?></td>
                    <td><?= $IPR['fecha_emision']; ?></td>
                    <td><?= $IPR['no_credito']; ?></td>
                    <td class="center"><?= $IPR['alerta']; ?></td>
                    <td class="center"><?= $IPR['estado']; ?></td>
                    <td></td>
                  </tr>
                  <?php endforeach;?>                                    
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="block-flat">
          <div class="header">
            <h3>Operaciones Reportes Urgentes de 24hrs Resueltas</h3>
          </div>
          <div class="content">
            <div>
              <table id="datatable-ip" class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Fecha de emisión</th>
                    <th>Nombre del Cliente</th>
                    <th>Motivo de Alerta</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ( $alertasIPR as $IPR):?>
                  <tr class="odd gradeX">
                    <td><?= $IPR['Id']; ?></td>
                    <td><?= $IPR['fecha_emision']; ?></td>
                    <td><?= $IPR['no_credito']; ?></td>
                    <td class="center"><?= $IPR['alerta']; ?></td>
                    <td class="center"><?= $IPR['estado']; ?></td>
                    <td></td>
                  </tr>
                  <?php endforeach;?>                                   
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="block-flat">
          <div class="header">
            <h3>Buzón Anónimo Resueltas</h3>
          </div>
          <div class="content">
            <div>
              <table id="datatable-ip" class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Fecha de emisión</th>
                    <th>Nombre del Cliente</th>
                    <th>Motivo de Alerta</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ( $alertasIPR as $IPR):?>
                  <tr class="odd gradeX">
                    <td><?= $IPR['Id']; ?></td>
                    <td><?= $IPR['fecha_emision']; ?></td>
                    <td><?= $IPR['no_credito']; ?></td>
                    <td class="center"><?= $IPR['alerta']; ?></td>
                    <td class="center"><?= $IPR['estado']; ?></td>
                    <td></td>
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
</div>