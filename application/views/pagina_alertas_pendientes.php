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
    <h2>Alertas Pendientes</h2>    
  </div>
  <div class="cl-mcont">
    <div class="row">
      <div class="col-md-12">
        <div class="block-flat">
          <div class="header">
            <h3>Operaciones Inusuales</h3>
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
                <?php foreach ( $alertasOI as $OI):?>
                  <tr class="odd gradeX">
                    <td><?= $OI['Id']; ?></td>
                    <td><?= $OI['fecha_emision']; ?></td>
                    <td><?= $OI['no_credito']; ?></td>
                    <td class="center"><?= $OI['alerta']; ?></td>
                    <td class="center"><?= $OI['estado']; ?></td>
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
            <h3>Operaciones Relevantes</h3>
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
                  <?php foreach ( $alertasOR as $OR):?>
                  <tr class="odd gradeX">
                    <td><?= $OR['Id']; ?></td>
                    <td><?= $OR['fecha_emision']; ?></td>
                    <td><?= $OR['no_credito']; ?></td>
                    <td class="center"><?= $OR['alerta']; ?></td>
                    <td class="center"><?= $OR['estado']; ?></td>
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
            <h3>Operaciones Internas Preocupantes</h3>
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
                  <?php foreach ( $alertasIP as $IP):?>
                  <tr class="odd gradeX">
                    <td><?= $IP['Id']; ?></td>
                    <td><?= $IP['fecha_emision']; ?></td>
                    <td><?= $IP['no_credito']; ?></td>
                    <td class="center"><?= $IP['alerta']; ?></td>
                    <td class="center"><?= $IP['estado']; ?></td>
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
            <h3>Operaciones Reportes Urgentes de 24hrs</h3>
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
                  <?php foreach ( $alertasIP as $IP):?>
                  <tr class="odd gradeX">
                    <td><?= $IP['Id']; ?></td>
                    <td><?= $IP['fecha_emision']; ?></td>
                    <td><?= $IP['no_credito']; ?></td>
                    <td class="center"><?= $IP['alerta']; ?></td>
                    <td class="center"><?= $IP['estado']; ?></td>
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
            <h3>Buzón Anónimo</h3>
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
                  <?php foreach ( $alertasIP as $IP):?>
                  <tr class="odd gradeX">
                    <td><?= $IP['Id']; ?></td>
                    <td><?= $IP['fecha_emision']; ?></td>
                    <td><?= $IP['no_credito']; ?></td>
                    <td class="center"><?= $IP['alerta']; ?></td>
                    <td class="center"><?= $IP['estado']; ?></td>
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