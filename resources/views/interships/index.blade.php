<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Стажировки</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="happy">
    <big><h1 align="center" style="color: white">Подобранные стажировки</h1></big>
    <hr color="blue">
    <big>
    <em>
    
    @foreach ($interships as $intership) 
    <div class="alert alert-primary" role="alert">
         <a href="interships/{{$intership->id}}">
             {{ $intership->title}}
         </a>
         </div>
    @endforeach 
   
</em>
</big>
</body>
</html>
