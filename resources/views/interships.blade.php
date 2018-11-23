 <!DOCTYPE html>
 <html land="en">
 <head>
    <meta charset="UTF-8">
    <title></title>
 </head>
 <body>
    <ul>
        @foreach ($interships as $intership)
            <li>{{ $intership->title}}</li>
        @endforeach
    </ul>
 </body>
 </html>