<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="fa fa-gear"></span> </button>
      <a class="navbar-brand" href="#"><span>ProPLD</span></a></div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
       
        </li>
        <li class="active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> <b class="caret"></b></a>
          <ul class="dropdown-menu col-menu-2">
            <li class="col-sm-6 no-padding">
              <ul>
                <li class="dropdown-header"><i class="fa fa-group"></i>Usuarios</li>
                <li><a href="#">Cambio de Contraseña</a></li>
                <li><a href="#">Perfil de Usuario</a></li>
                <li class="dropdown-header"><i class="fa fa-question-circle"></i>Información</li>
                <li><a href="#" class="md-trigger" data-modal="form-primary-datos-generales" id="datos-generales">Datos Generales</a></li>
                <li><a href="#">Listas Peps y Negras</a></li>
                <li><a href="#">Listas Personas Bloquedas</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Buzón</a></li>
              </ul>
            </li>
            <li  class="col-sm-6 no-padding">
              <ul>
                <li class="dropdown-header"><i class="fa fa-gear"></i>Matriz de Riesgo</li>                
                <li><a href="<?=base_url('index.php/matriz/mostrar_productos');?>">Productos</a></li>
                <li><a href="<?=base_url('index.php/matriz/mostrar_frecuencia_pagos');?>">Frecuencia de Pagos</a></li>
                <li><a href="<?=base_url('index.php/matriz/mostrar_transaccionalidad');?>">Transaccionalidad</a></li>
                <li><a href="<?=base_url('index.php/matriz/mostrar_pagina_matriz');?>">Riesgo Geográfico</a></li>
                <li><a href="<?=base_url('index.php/matriz/mostrar_actividad');?>">Riesgo por Actividad</a></li>
                <li><a href="<?=base_url('index.php/matriz/mostrar_tipo_persona');?>">Tipo de Persona</a></li>
                <li><a href="<?=base_url('index.php/matriz/mostrar_numero_personas');?>">Número de Personas</a></li>
                <li><a href="<?=base_url('index.php/matriz/mostrar_movimientos');?>">Movimientos</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right user-nav">
        <li class="dropdown profile_menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo 'MIKE'; ?><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Mi Cuenta</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Mnsajes</a></li>
            <li class="divider"></li>
            <li><a href="#">Cerrar Sistema</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right not-nav">
        <li class="button dropdown"> <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class=" fa fa-comments"></i></a>
          <ul class="dropdown-menu messages">
            <li>
              <div class="nano nscroller">
                <div class="content">
                  <ul>
                    <li> <a href="#"> <img src="<?= base_url('assets/images/blue.jpg')?>" alt="avatar" /><span class="date pull-right">8 May.</span> <span class="name">Blue Demon</span> Blue Demon esta fuera del Perfil Transaccional Permitido. </a> </li>
                    <li> <a href="#"> <img src="<?= base_url('assets/images/atlantis.jpg')?>" alt="avatar" /><span class="date pull-right">9 May.</span><span class="name">Atlantis</span>Realizo Pago en efectivo mayor a 300,000 pesos permitido para  Persona Fisica.</a> </li>
                  </ul>
                </div>
              </div>
              <ul class="foot">
                <li><a href="#">Ver más Mensajes.</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="button dropdown"> <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="bubble">2</span></a>
          <ul class="dropdown-menu">
            <li>
              <div class="nano nscroller">
                <div class="content">
                  <ul>
                    <li><a href="#"><i class="fa fa-credit-card danger"></i> <b>Atlantis</b> Realizo un pago en efectivo. <span class="date">1 hour ago.</span></a></li>
                  </ul>
                </div>
              </div>
              <ul class="foot">
                <li><a href="#">Ver más </a></li>
              </ul>
            </li>
          </ul>
        </li>        
      </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
</div>
<!-- Nifty Modal Productos -->
<form id="form-datos-generales">
  <div id="form-primary-datos-generales" class="md-modal colored-header-encabezado custom-width-productos md-effect-9">
    <div class="md-content">
      <div class="modal-header">    
        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
      </div>
      <div class="modal-body" id="mb-datos-generales">

      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
        <button type="submit" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Guardar</button>
      </div>
    </div>
  </div>
  <div class="md-overlay"></div>
</form>

