<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Стажировки</title>
</head>
<body style = "background-color: #DF8C8C">
    <h1 align="center" style="color: white">Подобранные стажировки</h1>
    <hr color="blue">

      @foreach ($interships as $intership) 
        <li>
         <a href="interships/{{$intership->id}}">
             {{ $intership->title}}
         </a>
        </li> 
      @endforeach 
      <div class="happy">
      
      </div>
      
</body>
</html>
