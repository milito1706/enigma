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
        <div class="row">
          <div class="col-md-12">
            <div class="block-flat">
              <div class="header">                            
                <h2>Buzón Anónimo</h2>
              </div>
              <div class="content">
                <form id="form-buzon" style="border-radius: 0px;" class="form-horizontal group-border-dashed">                    
                    <div class="form-group">                      
                      <div class="col-sm-12">
                        <textarea class="form-control" cols="30" rows="10"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-6"> 
                        <button type="submit" class="btn btn-primary">Enviar Comentarios</button>                      
                      </div>
                    </div>
                  </form>
              </div>
            </div>              
          </div>
        </div>
      </div>      
    </body>
    </html>