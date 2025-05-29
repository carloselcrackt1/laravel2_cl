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
                <form action="{{route('project.update',$proyecto ->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tema</span>
                        <input type="text" name="Tema" id="Tema" class="form-control" aria-label="Sizing example input">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">descripcion</span>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" aria-label="Sizing example input">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">area</span>
                        <input type="text" name="area" id="area" class="form-control" aria-label="Sizing example input">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">estado</span>
                        <input type="text" name="estado" id="estado" class="form-control" aria-label="Sizing example input">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">observacion</span>
                        <input type="text" name="observacion" id="observacion" class="form-control" aria-label="Sizing example input">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">UsuarioExt</span>
                        <input type="text" name="usuarioExt" id="usuarioExt" class="form-control" aria-label="Sizing example input">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>