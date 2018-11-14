<div class="tab-pane active" role="tabpanel" id="step1">
    <form method="post" enctype="multipart/form-data" id="formDataStepOne">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="step1">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label class=" col-sm-4" for="email">No. de Cotización: </label>
                    <p class="form-control-static">Prodemex 001 swj</p>
                </div>
                
                <div class="col-md-6"></div>

                <div class="col-md-6 form-group">
                    <label for="cliente" class="control-label">Cliente:</label>
                    <input type="text" class="form-control" id="nameClient" placeholder="Nombre Cliente" name="nameClient" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="exampleInputEmail1" class="control-label">Abreviación:</label>
                    <input type="text" class="form-control" id="abreviation" placeholder="Abreviacion" name="abreviation" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="exampleInputEmail1">Pago Anticipo: </label>
                    <input type="text" class="form-control" id="anticipo" placeholder="Anticipo" name="anticipo" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="exampleInputEmail1">Direccion: </label>
                    <input type="text" class="form-control" id="direction" placeholder="Direccion" name="direction" required>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="exampleInputEmail1">Telefono</label>
                    <input type="text" class="form-control" id="tel" placeholder="Telefono" name="tel" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 form-group">
                    <label>Enviada por:</label>
                    <select name="encargado" id="encargado" class="dropselectsec form-control" required>
                        <option value="">Encargado </option>
                        <option value="1">Swat Millan Baza</option>
                        <option value="2">Victor Vargas Cruz </option>
                        <option value="3">Teresa de Jesus Tolentino</option>
                    </select>
                </div>
            </div>

            <div class="row"> 
                <div class="col-md-6 form-group">
                    <label>Nombre del archivo</label>
                    <input type="text" id="nomArchivo" name="nomArchivo" class="form-control" required>
                </div>

                <div class="col-md-6 form-group">
                    <label>Archivo</label>
                    <input type="file" name="file" id="file"class="form-control" required> 
                    <!-- <input type="submit" value="Guardar Archivo"> -->
                </div>
            </div>
        </div>
        
        <ul class="list-inline pull-right">
            <li><button type="submit" class="btn btn-primary next-step" id="">Guardar y Continuar </button></li>
        </ul><br><br>
    </form>
</div>
