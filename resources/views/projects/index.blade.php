<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>

  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col-9 bg-dark text-white">
                <p class="fs-1">Titulo</p>
                <table class="table table-dark table-borderless">
                  <thead>
                    Solicitud
                  </thead>  
                    <tbody>
                        @foreach($proyectos as $proyecto)
                        <tr>
                            <th scope="row">{{$proyecto->id}}</th>
                            <th>{{$proyecto->Tema}}</th>
                            <th>{{$proyecto->descripcion}}</th>  
                            <th>{{$proyecto->area}}</th>
                            <th>{{$proyecto->estado}}</th>
                            <th>{{$proyecto->observacion}}</th>  
                            <th>{{$proyecto->usuarioExt}}</th>
                            <th>{{$proyecto->created_at}}</th>
                            <th>{{$proyecto->updated_at}}</th>
                            <td>
                            <form action="{{ route('project.destroy', $proyecto->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                      </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col bg-primary text-white">
            proyecto realizado en clase
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>