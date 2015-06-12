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
                        <div class="butpro  btn btn-sm md-trigger" id="new_producto" data-modal="form-primary-productos">
                          <i class="fa fa-plus-circle fa-2x  pull-left color-success"> </i>Nuevo Producto
                        </div>
                        <div class="content">
                          <div>
                            <table id="datatable-productos" class="no-border blue">
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
                                <?php foreach ( $productos as $producto):?>
                                  <tr class="odd gradeX">
                                    <td><?php echo $producto['Nombre_Producto'];?></td>
                                    <td class="center" align="right"><?php echo $producto['tolerancia_cuota'];?></td>
                                    <td class="center" align="right"><?php echo $producto['tiempo_liquidacion'];?></td>
                                    <td class="center" align="right"><?php echo $producto['min_monto'];?> </td>
                                    <td class="center" align="right"><?php echo $producto['max_monto'];?></td>
                                    <td class="center">
                                     <button id="edit_producto" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $producto['Id'];?>" data-edit="editProducto" data-modal="form-primary-productos" ><i class="fa fa-pencil"></i></button></td>
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
                 <div id="frecuencia" class="tab-pane cont">
                  <h3 class="hthin">Frecuencia de Pagos</h3>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="block-flat">
                        <div class="butpro btn btn-sm md-trigger" id="new_frecuencia_pago" data-modal="form-primary-frecuencia-pago">
                          <i class="fa fa-plus-circle fa-2x  pull-left color-success"> </i>Frecuencia de Pago
                        </div>
                        <div class="content">
                          <div>
                            <table id="datatable-frecuencia" class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Unidad de Credito</th>
                                  <th>Números de Pagos</th>                              
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ( $frecuencia_pagos as $frecuencia_pago):?>
                                  <tr class="odd gradeX">
                                    <td><?php echo $frecuencia_pago['unidad_credito'];?></td>
                                    <td><?php echo $frecuencia_pago['frecuencia_pago'];?></td>                                
                                    <td class="center">
                                     <button id="editar_frecuencia_pago" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $frecuencia_pago['id'];?>" data-persona="<?php echo $frecuencia_pago['unidad_credito'];?>" data-edit="editFrecuencia" data-modal="form-primary-frecuencia-pago" ><i class="fa fa-pencil"></i></button></td>
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
                 <div id="transaccionalidad" class="tab-pane">
                  <h3 class="hthin">Transaccionalidad</h3>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="block-flat">                        
                        <div class="content">
                          <div>
                            <table id="datatable-transaccionalidad" class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Minimo</th>
                                  <th>Maximo</th>
                                  <th>Clasificación del Riesgo</th>
                                  <th>Divisa</th>                                  
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ( $transaccionalidad as $transaccion):?>
                                  <tr class="odd gradeX">
                                    <td><?php echo $transaccion['r_min'];?></td>
                                    <td><?php echo $transaccion['r_max'];?></td>
                                    <td><?php echo $transaccion['calificacion'];?></td>
                                    <td class="center"><?php echo $transaccion['divisa'];?> </td>                                    
                                    <td class="center">
                                     <button id="editar_transaccionalidad" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $transaccion['Id'];?>" data-persona="<?php echo $transaccion['Id'];?>" data-edit="editTransaccionalidad" data-modal="form-primary-transaccionalidad" ><i class="fa fa-pencil"></i></button></td>
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
                 <div id="estados" class="tab-pane">
                  <h3 class="hthin">Riesgo por estados</h3>
                  <p>This is just an example of content writen by <b>Jeff Hanneman</b>, as you can see it is a clean design with large</p>
                </div>
                <div id="pais" class="tab-pane">
                  <h3 class="hthin">Riesgo por país</h3>
                  <p>This is just an example of content writen by <b>Jeff Hanneman</b>, as you can see it is a clean design with large</p>
                </div>
                <div id="actividad" class="tab-pane">
                  <h3 class="hthin">Transaccionalidad</h3>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="block-flat">                        
                        <div class="content">
                          <div>
                            <table id="datatable-actividad" class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Actividad</th>
                                  <th>Calificación</th>                                                                    
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ( $actividades as $actividad):?>
                                  <tr class="odd gradeX">
                                    <td><?php echo $actividad['actividad_economica'];?></td>
                                    <td><?php echo $actividad['calificacion'];?></td>                                                                       
                                    <td class="center">
                                     <button id="editar" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $actividad['Id'];?>" data-persona="<?php echo $actividad['Id'];?>" data-edit="editClient" data-modal="modal-tab" ><i class="fa fa-pencil"></i></button></td>
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
                 <div id="tipoPersona" class="tab-pane">
                  <h3 class="hthin">Tipo de Persona</h3>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="block-flat">
                        <div class="butpro  btn btn-sm md-trigger" id="new_tipo_persona" data-modal="form-primary-tipo-persona">
                          <i class="fa fa-plus-circle fa-2x  pull-left color-success"> </i>Nuevo Tipo de Persona
                        </div>
                        <div class="content">
                          <div>
                            <table id="datatable-tipo_persona" class="table no-border blue">
                              <thead>
                                <tr>
                                  <th>Nombre</th>
                                  <th>Calificación</th>                                                                    
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ( $tipo_personas as $tipo_persona):?>
                                  <tr class="odd gradeX">
                                    <td><?php echo $tipo_persona['etiqueta'];?></td>
                                    <td><?php echo $tipo_persona['codigo'];?></td>                                                                       
                                    <td class="center">
                                     <button id="editar_tipo_persona" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $tipo_persona['Id'];?>" data-edit="editTipoPersona" data-modal="form-primary-tipo-persona" ><i class="fa fa-pencil"></i></button></td>
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
                 <div id="noPersonas" class="tab-pane">
                  <h3 class="hthin">Número de Personas</h3>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="block-flat">                        
                        <div class="content">
                          <div>
                            <table id="datatable-n_personas" class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Minimo</th>
                                  <th>Maximo</th>
                                  <th>Clasificación del Riesgo</th>                                                                
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ( $num_personas as $num_persona):?>
                                  <tr class="odd gradeX">
                                    <td><?php echo $num_persona['r_min'];?></td>
                                    <td><?php echo $num_persona['r_max'];?></td>                                                                       
                                    <td><?php echo $num_persona['calificacion'];?></td>                                                                       
                                    <td class="center">
                                     <button id="editar_movimiento" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $num_persona['Id'];?>" data-persona="<?php echo $num_persona['Id'];?>" data-edit="editClient" data-modal="modal-tab" ><i class="fa fa-pencil"></i></button></td>
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
                 <div id="movimientos" class="tab-pane">
                  <h3 class="hthin">Movimientos</h3>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="block-flat"> 
                      <div class="butpro  btn btn-sm md-trigger" id="new_movimiento" data-modal="form-primary-movimiento">
                          <i class="fa fa-plus-circle fa-2x  pull-left color-success"> </i>Nuevo Movimiento
                        </div>                      
                        <div class="content">
                          <div>
                            <table id="datatable-movimientos" class="table no-border blue">
                              <thead>
                                <tr>
                                  <th>Nombre</th>                                  
                                  <th>Clasificación</th>                                                            
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ( $movimientos as $movimiento):?>
                                  <tr class="odd gradeX">
                                    <td><?php echo $movimiento['etiqueta'];?></td>
                                    <td><?php echo $movimiento['calificacion'];?></td>                                                                      
                                    <td class="center">
                                     <button id="editar_movimiento" class="btn btn-primary btn-xs md-trigger" data-id="<?php echo $movimiento['Id'];?>" data-persona="<?php echo $movimiento['Id'];?>" data-edit="editMovimiento" data-modal="form-primary-movimiento" ><i class="fa fa-pencil"></i></button></td>
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
             </div>
             <!-- Nifty Modal Productos -->
             <form id="form-productos">
              <div id="form-primary-productos" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">
                <div class="md-content">
                  <div class="modal-header">          
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
                  </div>
                  <div class="modal-body form">

                  </div>
                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
                    <button type="submit" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Guardar</button>
                  </div>
                </div>
              </div>
              <div class="md-overlay"></div>
            </form>
            <!-- Nifty Modal Tipo de Persona -->
             <form id="form-tipo-persona">
              <div id="form-primary-tipo-persona" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">
                <div class="md-content">
                  <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
                  </div>
                  <div class="modal-body form">

                  </div>
                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
                    <button type="submit" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Guardar</button>
                  </div>
                </div>
              </div>
              <div class="md-overlay"></div>
            </form>
            <!-- Nifty Modal Movimientos -->
             <form id="form-movimientos">
              <div id="form-primary-movimiento" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">
                <div class="md-content">
                  <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
                  </div>
                  <div class="modal-body form">

                  </div>
                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
                    <button type="submit" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Guardar</button>
                  </div>
                </div>
              </div>
              <div class="md-overlay"></div>
            </form>              
            <!-- Nifty Modal Frecuencia de Pago -->
             <form id="form-frecuencia-pago">
              <div id="form-primary-frecuencia-pago" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">
                <div class="md-content">
                  <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
                  </div>
                  <div class="modal-body form">

                  </div>
                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
                    <button type="submit" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Guardar</button>
                  </div>
                </div>
              </div>
              <div class="md-overlay"></div>
            </form>
            <!-- Nifty Modal Transaccionalidad -->
             <form id="form-transaccionalidad">
              <div id="form-primary-transaccionalidad" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">
                <div class="md-content">
                  <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
                  </div>
                  <div class="modal-body form">

                  </div>
                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
                    <button type="submit" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Guardar</button>
                  </div>
                </div>
              </div>
              <div class="md-overlay"></div>
            </form>

          </div>          


        </div>        
      </div>

    </div>
  </div> 

</body>
</html>