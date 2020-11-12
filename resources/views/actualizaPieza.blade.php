<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Refaccionaria</title>
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/sandstone/bootstrap.min.css" rel="stylesheet">
        <style>
        a{
            color: tomato;
        }
        a:hover{
            color: tomato;
        }
        </style>
        
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Inicio</a>
            </li>
            </ul>
        </div>
    </nav>


    <div class="row col-lg-12">
        <div class="form-group m-2">
            <form action="/edicionPieza" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$pieza->id}}">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="" value="{{$pieza->nombre}}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" name="descripcion" rows="2">{{$pieza->descripcion}}</textarea>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="text" name="cantidad" id="" value="{{$pieza->cantidad}}">  
            </div>
            <div class="form-group">
                <label for="costo">Costo:</label>
                <input type="text" name="costo" id="" value="{{$pieza->costo}}">  
            </div>

            <div class="form-group">
                <input name="guardar" id="" class="btn btn-primary" type="submit" value="Guardar">
            </div>
            </form>
        </div>
    </body>
</html>
