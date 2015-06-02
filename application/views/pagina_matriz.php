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
        
        <h3 class="hthin">Configuración de Matriz de Riesgo</h3>
        
      </div>
      
      <div class="cl-mcont">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="tab-container">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#productos" data-toggle="tab">Productos</a></li>
                <li><a href="#frecuencia" data-toggle="tab">Frecuencia Pagos</a></li>
                <li><a href="#transaccionalidad" data-toggle="tab">Transaccionalidad</a></li>
                <li><a href="#estados" data-toggle="tab">Riesgo por estados</a></li>
                <li><a href="#pais" data-toggle="tab">Riesgo por país</a></li>
                <li><a href="#actividad" data-toggle="tab">Riesgo por Actividad</a></li>
                <li><a href="#tipoPersona" data-toggle="tab">Tipo Persona</a></li>
                <li><a href="#noPersonas" data-toggle="tab">Número Personas</a></li>
                <li><a href="#movimientos" data-toggle="tab">Movimientos</a></li>
              </ul>
              <div class="tab-content">
                <div id="productos" class="tab-pane active cont">
                  <h3 class="hthin">Productos</h3>
                  <div class="row">
            <div class="col-md-12">
              <div class="block-flat">
                <div class="butpro butstyle-credit btn-sm md-trigger" id="new_producto" data-modal="form-primary-productos">
                  <i class="fa fa-plus-circle fa-2x  pull-left color-success"> </i>Nuevo Producto
                </div>
                <div class="content">
                  <div>
                    <table id="datatable-productos" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Tolerancia Cuota</th>
                          <th>Tolerancia Cuota Interes</th>
                          <th>Min. Crédito</th>
                          <th>Max. Crédito</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="odd gradeX">
                          <td>SIMPLE INDIVIDUAL</td>
                          <td>2.99</td>
                          <td>0.00</td>
                          <td class="center"> 4000.00</td>
                          <td class="center">120000.00</td>
                          <td class="center"></td>
                        </tr>
                        <tr class="even gradeC">
                          <td>SIMPLE INDIVIDUAL</td>
                          <td>2.99</td>
                          <td>0.00</td>
                          <td class="center"> 4000.00</td>
                          <td class="center">120000.00</td>
                          <td class="center"></td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
                </div>
                <div id="frecuencia" class="tab-pane cont">
                  <h3 class="hthin">Frecuencia Pagos</h3>
                  <p>This is just an example of content writen by <b>Jeff Hanneman</b>, as you can see it is a clean design with large</p>
                </div>
                <div id="transaccionalidad" class="tab-pane">
                  <h3 class="hthin">Transaccionalidad</h3>
                  <p>This is just an example of content writen by <b>Jeff Hanneman</b>, as you can see it is a clean design with large</p>
                </div>
                <div id="estados" class="tab-pane">
                  <h3 class="hthin">Riesgo por estados</h3>
                  <p>This is just an example of content writen by <b>Jeff Hanneman</b>, as you can see it is a clean design with large</p>
                </div>
                <div id="pais" class="tab-pane">
                  <h3 class="hthin">Riesgo por país</h3>
                  <p>This is just an example of content writen by <b>Jeff Hanneman</b>, as you can see it is a clean design with large</p>
                </div>
                <div id="actividad" class="tab-pane">
                  <h3 class="hthin">Riesgo por Actividad</h3>
                  <p>This is just an example of content writen by <b>Jeff Hanneman</b>, as you can see it is a clean design with large</p>
                </div>
                <div id="tipoPersona" class="tab-pane">
                  <h3 class="hthin">Tipo Persona</h3>
                  <p>This is just an example of content writen by <b>Jeff Hanneman</b>, as you can see it is a clean design with large</p>
                </div>
                <div id="noPersonas" class="tab-pane">
                  <h3 class="hthin">Número Personas</h3>
                  <p>This is just an example of content writen by <b>Jeff Hanneman</b>, as you can see it is a clean design with large</p>
                </div>
                <div id="movimientos" class="tab-pane">
                  <h3 class="hthin">Movimientos</h3>
                  <p>This is just an example of content writen by <b>Jeff Hanneman</b>, as you can see it is a clean design with large</p>
                </div>
              </div>
            </div>
          </div>          
        </div>        
      </div>
    <!-- Modal Nuevo producto-->
    <form id="form-creditos" method="POST">
      <div id="form-primary-productos" class="md-modal colored-header custom-width-creditos md-effect-8">
        <div class="md-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
          </div>
          <div class="modal-body form">
            
            
            <div class="modal-footer">
              <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
              <button type="submit" class="btn btn-primary btn-flat md-close" data-dismiss="modal">Guardar</button>
            </div>
          </div>
        </div>
      </div>  
      <div class="md-overlay"></div>
    </form>

    <!-- Fin -->
    </div>
  </div> 
</div>
</form>
</body>
</html>