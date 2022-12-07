<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulário de Espera</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form action="*" method="POST">

        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Digite seu email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Digite seu nome">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Digite seu celular">
                    </div>
                </div>
            </div>
        </div>

    </form>


</body>

</html>