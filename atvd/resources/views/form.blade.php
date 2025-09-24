@section('titulo', $titulo)

@section('conteudo')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="d-flex flex-column min-vh-100" style="background-color:rgba(216, 216, 216, 0.2);">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

    <div class="container text-start pt-2 pb-5">
        <div class="row">
            <div class="col">
            <div class="mb-3">
              <form action="{{ route('form')  }}" method="get">
                <label for="exampleFormControlInput1" class="form-label">Nome Completo:</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mensagem:</label>
                <textarea class="form-control" name="mensagem" id="mensagem" rows="3" placeholder="Digite sua Mensagem"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar mensagem</button>
              </form>
            </div>
        </div>
    </div>

    </div>

  </div>
</body>
</html>