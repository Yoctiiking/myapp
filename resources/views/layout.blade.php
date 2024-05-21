<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="container bg-success-subtle">
    <h1 class="text-start text-primary">~SITE D'ESSAI~</h1>
    <ul>
        <li><a href="/">Welcome</a></li>
        <li><a href="/user">Users</a></li>
    </ul>
    <div class="border border-black">
        <h2 class="text-center text-danger text-decoration-underline">
            @yield('title')
        </h2><br>
        @yield('content')
    </div>
</body>
</html>