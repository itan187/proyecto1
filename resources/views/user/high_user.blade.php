
@include('header')

@yield('container')

<div class="container">

        <div class="col-md-6">
        <form>
            <title>Alta usuario</title>
                <div class="form-group row">
                    
                  <label for="staticEmail" class="col-sm-2 col-form-label">Nombre: </label>
                   <div class="col-sm-10">
                     <input type="text" class="form-control" id="inpuText" placeholder="Nombre">
                  </div>
                  <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña:</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                  </div>
                  <label for="inputMarkell" class="col-sm-2 col-form-label">Puesto: </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inpuText" placeholder="Puesto">
                  </div>
                  <label for="inputMarkell" class="col-sm-2 col-form-label">Area: </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inpuText" placeholder="Area">
                  </div>
                  <label for="inputMarkell" class="col-sm-2 col-form-label">Abreviacion </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inpuText" placeholder="Abreviacion">
                  </div>
              </form>
              <div>
                    <button type="button" class="btn btn-primary">Guardar</button>
              </div>
    </div>
</div>