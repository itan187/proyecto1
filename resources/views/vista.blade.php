@include('header')
@yield('container')


<div class="container show-top-margin separate-rows tall-rows">
   
        <div class="row show-grid">

        <div class="row">
            <div class="col-md-6">
                <h2>Menu</h2>
                  <div class="col-md-4">
                    <img src="imag/carpeta.png"> <label>Gestion de Clientes</label>
                  </div>
                  <div class="col-md-4">
                    <a href="{{ url('') }}"><img src="imag/archivo.png"><label>Gestion de Proyectos</label></a>
                  </div>
                  <div class="col-md-4">
                    <a href="{{ url('/user/high_user') }}"><img src="imag/usuario.png"><label>Gestion de usuarios</label></a>
                </div>
              </div>
        </div>

        </div>
</div>
