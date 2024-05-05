<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error de connexió a la base de dades</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-danger" role="alert">
            Error de connexió a la base de dades. Torna a <a href="{{ route('login') }}">iniciar sessió</a>.
        </div>
    </div>
</body>
</html>
