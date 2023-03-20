<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="/bootstrap//dist/css/bootstrap.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="/user/style/style.css">
    <title>Сфера</title>
</head>

<body>

    <!-- меню -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top nav-text" style="background-color: black;">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Сфера</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="true" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#servis">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#about">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#contact">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')
    <!-- <section style="background-color: #ffffff;">
    <img src="logo.png" style="padding: 0%; width: 80px; height: 20px; justify-content: center;">
  </section> -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>