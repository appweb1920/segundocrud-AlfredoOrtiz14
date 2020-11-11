<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Refaccionaria</title>
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/sandstone/bootstrap.min.css" rel="stylesheet">

        
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>

            </ul>
        </div>
    </nav>


    <div class="row col-lg-12">
        <div class="col-lg-4">
            <div class="form-group m-2">
                <form action="/nuevaPieza" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea class="form-control" name="descripcion" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad:</label>
                    <input type="text" name="cantidad" id="">  
                </div>
                <div class="form-group">
                    <label for="costo">Costo:</label>
                    <input type="text" name="costo" id="">  
                </div>

                <div class="form-group">
                    <input name="guardar" id="" class="btn btn-primary" type="submit" value="Guardar">
                </div>
                </form>
            </div>
        </div>

        <table class="table table-striped mt-2 col-lg-8">
        <thead>
            <tr class="table-primary">
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Costo</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @if(!is_null($piezas))
                @foreach($piezas as $p)
                <tr>
                <th scope="row">{{$p->nombre}}</th>
                <td>{{$p->descripcion}}</td>
                <td>{{$p->cantidad}}</td>
                <td>{{$p->costo}}</td>
                <td>
                <a href="/editaPunto/{{$p->id}}">Editar</a>
                <a href="/borraPunto/{{$p->id}}">Borrar</a>
                </td>
                </tr>
                @endforeach
            @endif
        </tbody>
        </table>
    </body>
</html>
