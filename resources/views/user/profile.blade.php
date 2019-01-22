@include('header')
@yield('container')

<h1>Bienvenid@ a su Panel de Control</h1>
@if (Session::has('status'))
<hr />
<div class='text-success'>
    {{Session::get('status')}}
</div>
<hr />
@endif




<div class="container"> 
    
        <div class="shadow-lg p-3 mb-5 bg-white rounded " >
                <div class="Subhead mt-0 mb-0">
                    <h2 class="Subhead-heading">
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Perfil público </font>
                         </font>
                    </h2>
                </div>
                <div class="perf">
                        <form>
                                <div class="form-group row">
                                    
                                  <label for="staticEmail" class="col-sm-2 col-form-label">Nombre </label>
                                   <div class="col-sm-10">
                                     <input type="text" class="form-control" id="inpuText" placeholder="Usuario">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña:</label>
                                  <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                  </div>
                                </div>
                            
                              </form>
                </div>
                
                      <div class="perfil">
                            <h1>Cambiar imagen de perfil</h1>
                            <form method='post' action='{{url("user/updateprofile")}}' enctype='multipart/form-data'>
                                {{csrf_field()}}
                                <div class='form-group'>
                                    <label for='image'>Imagen: </label>
                                    <input type="file" name="image" />
                                    <div class='text-danger'>{{$errors->first('image')}}</div>
                                </div>
                                <button type='submit' class='btn btn-primary'>Actualizar imagen de perfil</button>
                            </form>
                      </div>
        </div>
        
</div>