 <!DOCTYPE html>
 <html land="en">
 <head>
    <meta charset="UTF-8">
    <title>Стажировки</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 </head>
 <body class="happy">
    <h1 align="center" style="color: white">Подобранные стажировки</h1>
    <hr color="blue">
    <ul> 
      @foreach ($interships as $intership) 
         <table> <li>{{ $intership->title}}</li></table> 
      @endforeach 
    </ul>
 </body>
 </html>