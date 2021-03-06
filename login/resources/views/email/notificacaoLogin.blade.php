<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <img style="width: 200px" src="{{ $message->embed( public_path() . '/img/perdidao.jpg' ) }}">
    
    <h1>Login feito em sua conta Sr.{{$nome}}</h1>
    <h1>Usando o e-mail.{{$email}}</h1>
    <h1>No dia e {{$data}}, e horas {{$hora}}</h1>
</body>
</html>