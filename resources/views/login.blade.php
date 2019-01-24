<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

    <title>Document</title>
</head>
<body>

        <div class="limiter">
                <div class="container-login100">
                        <div class="wrap-login100">
                            <div class="login100-pic js-tilt" data-tilt>
                                <img src="imag/logo.png" alt="IMG">
                            </div>

            <form action="/loginme" method="post" id ="form" class="login100-form validate-form">
                <span class="login100-form-title"><strong>LOGIN SSCOMP</strong></span>
                
                <div class="wrap-input100 validate-input" data-validate = "Validar Usuario">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input class="input100" type="text" id=" username" name="username"  placeholder="usuario" required>
                <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

            <div class="wrap-input100 validate-input" data-validate = "El password es necesario">
                <input class="input100" type="password" id="password"  placeholder="Password" name="password">
                <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                
             <div class="container-login100-form-btn">
                <input class="login100-form-btn" type="submit" name="login" value="login">
             </div>
            </form>
        </div>
</body>
</html>
<script type="text/javascript">
    $("#form")[0].reset();
    </script>