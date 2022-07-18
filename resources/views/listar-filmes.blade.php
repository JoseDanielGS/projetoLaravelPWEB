<!DOCTYPE html>
<html>

 <head>
    <title>Filmes</title>
 </head>

 <body>
    <h1>Filmes</h1>
    <lu>
    @foreach ($filmes as $filme)
        <li>{{$filme}}</li>
    @endforeach
    </lu>
 </body>

</html>