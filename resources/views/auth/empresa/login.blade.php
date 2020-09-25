<!DOCTYPE html>
<html>
<head>
    <title>dsadsa</title>
</head>
<body>

<form  method="POST" action="/login">
    
  {{--   {!! csrf_field() !!}
     --}}
    
@csrf

    <input class="form-control" type="text" name="usuario" placeholder="usuario">
    
    <input class="form-control" type="password" name="password" placeholder="Password">
    
    <input class="btn btn-primary" type="submit" value="Entrar"/>
    
</form>

</body>
</html>