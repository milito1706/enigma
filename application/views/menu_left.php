<?php 
$texp = 450;
$max = 500;
?>
<div class="cl-sidebar">
			<div class="cl-toggle"><i class="fa fa-bars"></i></div>
			<div class="cl-navblock">
        <div class="menu-space">
          <div class="content">
            <div class="side-user">
              <div class="info">
                <p> <?= $texp; ?>  / <?= $max; ?> <b>Expedientes</b><a href="#"><i class="fa fa-plus"></i></a></p>
                <div class="progress progress-user">
                  <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                    <span class="sr-only">50% Complete (success)</span>
                  </div>
                </div>
              </div>
            </div>
              <ul class="cl-vnavigation">          
              </p>
              <li><a href="<?=base_url('expediente/mostrar_pagina_expedientes');?>"><i class="fa fa-book"></i><span>Expedientes</span></a></li>
              <li><a href="<?=base_url('clientes/mostrar_pagina_clientes');?>"><i class="fa fa-users"></i><span>Clientes</span></a></li>
              <li><a href="<?=base_url('creditos/mostrar_pagina_creditos');?>"><i class="fa fa-credit-card"></i><span>Creditos</span></a></li>
              <li><a href="#"><i class="fa fa-file-text"></i><span>Reportes PLD</span></a></li>
              <li><a href="<?=base_url('alertas_pendientes/mostrar_pagina_alertas_pendientes');?>"><i class="fa fa-exclamation-triangle"></i><span>Alertas Pendientes</span></a></li>
              <li><a href="<?=base_url('alertas_resueltas/mostrar_pagina_alertas_resueltas');?>"><i class="fa fa-check-circle"></i><span>Alertas Resueltas</span></a></li>
              <li><a href="#"><i class="fa fa-upload"></i><span>Carga de Archivos</span></a></li>
              <li><a href="<?=base_url('datos_generales/mostrar_buzon');?>"><i class="fa fa-envelope-o"></i><span>Buzón para alertas Internas</span></a></li>
              <li><a href="#"><i class="fa fa-sign-out"></i><span>Salir</span></a></li>
            </ul>
          </div>
        </div>
            <div class="text-right collapse-button" style="padding:7px 9px;">
            <!--<input type="text" class="form-control search" placeholder="Buscar..." />-->
            <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
        </div>
			</div>
		</div>