<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?> Page</title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
</head>

<body>
    <nav class="navbar bg-dark navbar-expand-lg" data-bs-theme="dark">
        <div class="container px-5">
            <a class="navbar-brand" href="<?= BASE_URL; ?>">Movie MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($data['title'] == 'Home') : ?> active <?php endif; ?>" aria-current="page" href="<?= BASE_URL; ?>/home">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>