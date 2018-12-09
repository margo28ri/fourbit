<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Стажировки</title>
</head>
<body style = "background-color: #DF8C8C">
    <big><h1 align="center" style="color: white">Подобранные стажировки</h1></big>
    <hr color="blue">
    <big>
    <em>
    @foreach ($interships as $intership) 
        <li>
         <a href="interships/{{$intership->id}}">
             {{ $intership->title}}
         </a>
        </li> 
    @endforeach 
</em>
</big>
    <div class="happy">
    
    </div>
</body>
</html>
