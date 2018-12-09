 <!DOCTYPE html>
 <html land="en">
 <head>
    <meta charset="UTF-8">
    <title>Стажировки</title>
 </head>
 <body style = "background-color: #DF8C8C">
    <h1 align="center" style="color: white">Подобранные стажировки</h1>
    <hr color="blue">
    <ul> 
      @foreach ($interships as $intership) 
         <table> <li>{{ $intership->title}}</li></table> 
      @endforeach 
    </ul>
    <div class="happy">

 </body>
 </html>