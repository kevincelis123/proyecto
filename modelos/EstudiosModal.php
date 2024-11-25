<div class="modal fade" id="modalUsuario">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="titulo_modal"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" id="usuario_form">
                <input type="hidden" name="usu_id" id="usu_id">
                <div class="row mb-3 mx-2 my-1">
                    <label for="nombre" class="col-form-label">Nivel de Estudio:</label>  
                    <div class="col">                                
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="">
                    </div>
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="ape_paterno" class="col-form-label">Institucion:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="ape_paterno" id="ape_paterno" placeholder="">
                    </div>       
                </div>
                </div>     
                <div class="row mb-3 mx-2 my-1">
                    <label for="usu_correo" class="col-form-label">Titulos Obtenidos:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="usu_correo" id="usu_correo" placeholder="">
                    </div>
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="usu_pass" class="col-form-label">Fecha de Inicio:</label>
                    <div class="col">                                
                        <input class="form-control" name="usu_pass" id="usu_pass" placeholder="">
                    </div>
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="sexo" class="col-form-label">Fecha de Finalizacion:</label>
                    <div class="col">              
                    <input class="form-control" name="usu_pass" id="usu_pass" placeholder="">                  
                    </div>                    
                </div>
                <div class="row mb-3 mx-2 my-1">
            