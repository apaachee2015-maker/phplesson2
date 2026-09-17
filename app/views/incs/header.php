<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'TITLE' ?></title>
    <base href="<?= PATH ?>/">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/assets/main.css">
    <link rel="icon" href="public/img/favicon.png">
</head>
<body>
    <div class="wrapper">
        <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Main Page</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100 justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="posts/create">New Post</a>
                        </li>

                    </ul>
                    <ul class="d-flex text-white align-items-center list-unstyled m-0 gap-3">
                        <?php if (isset($_SESSION['user'])) : ?>
                            <li><?= $_SESSION['user']['name']; ?></li>
                            <li><a class="nav-link" href="logout">Logout</a></li>
                            <?php else: ?>
                            <li><a class="nav-link" href="register">Register</a></li>
                            <li><a class="nav-link" href="login">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        </div>

        <?php getalerts();?>


