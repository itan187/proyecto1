<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/tab.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <title>SSCOMP</title>
        
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
                        <ul class="navbar-nav">
                                <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/inicio') }}">Inicio  </a>
                                    </li>
                                    <li class="nav-item {{ request()->is('Vista general') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('/vistaGeneral') }}">Panel de Control</a>  
                                    </li>
                                    <li class="nav-item">  
                                        <a class="nav-link" href="documentation/changelog.html">Soporte </a>   
                                    </li>
                                    <li>
                                            <div class="d-none d-lg-block">
                                                    <div class="dropdown">
                                                            <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img alt="Image" src="imag/escudo.png" class="avatar">
                                                            </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="{{ url('user/profile') }}" class="dropdown-item">Perfil</a>
                                                            <a href="utility-account-settings.html" class="dropdown-item">Configuracion de la cuenta</a>
                                                            <a href="" class="dropdown-item">Cerrar session</a>
                                                        </div>
                                                    </div>
                                            </div>
                                </li>
                        </ul>
                </nav>
            </div>

       