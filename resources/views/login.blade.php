<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <div class="container center ">
            <form action="/loginme" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                Usuario: <input type="text" name="username"></br>
                Password: <input type="password" name="password"></br>
                <input type="submit" name="login" value="login">
            </form>
        </div>
</body>
</html>
<script type="text/javascript">
  

    $("#form")[0].reset();
    
    
    </script>