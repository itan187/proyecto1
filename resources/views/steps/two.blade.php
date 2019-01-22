<div class="tab-pane " role="tabpanel" id="step2">
    <form method="post" enctype="multipart/form-data" id="formDataStepTwo">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="step2">
            <div class="row">
                <div class="col-md-6 form-group">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">Subir archivo</h2>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12 form-group">
                                    <label class="" for="nombreArchivoOrden">Nombre del archivos: </label>
                                    <input name="nombreArchivoOrden" id="nombreArchivoOrden" type="text" class="form-control" required/>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label class="" for="archivoOrden">Archivo: </label>
                                    <input name="archivoOrden" id="archivoOrden" type="file" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="list-inline pull-right">
            <li><button type="submit" class="btn btn-primary next-step" id="">Guardar y Continuar </button></li>
        </ul>
    </form>
</div>