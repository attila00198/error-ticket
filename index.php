<?php include 'includes/autoload.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <title>Hibajegyek</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
    <header>
        <div class="row justify-content-center align-items-center g-2 header">
            <div class="col">
                <h1>Hibajeggy Létrehozása</h1>
            </div>
        </div>
    </header>

    <nav class="row navbar navbar-light bg-light justify-content-between menu">
        <ul class="nav col-auto">
            <li class="nav-item">
                <a class="nav-link active" href="/" aria-current="page">Hibajegy küldése</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tickets">Hibajegyek kezelése</a>
            </li>
        </ul>

        <?php if(!isset($_SESSION["user"])): ?>
        <ul class="nav col-auto">
            <li class="nav-item">
                <a class="nav-link active" href="/register" aria-current="page">Regisztráció</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">Belépés</a>
            </li>
        </ul>
        <?php endif; ?>
    </nav>
    <main>
        <div class="container">
            <div class="row justify-content-center align-items-center g-2 content">
                <?php include 'router.php'; ?>
            </div>
        </div>
    </main>

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>