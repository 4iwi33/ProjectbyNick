<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>ProjecbyNick</title>
</head>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">TravelStates.com</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Главная</a>
            <a class="p-2 text-dark" href="#">Контакты</a>
            <a class="p-2 text-dark" href="#">Контакты</a>
            <a class="p-2 text-dark" href="#">Контакты</a>
            <a class="p-2 text-dark" href="#">Контакты</a>
            <a class="p-2 text-dark" href="#">Контакты</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Войти</a>
    </div>
    <div class="container mt-5">
        <h3 class="mb-5">States to visit</h3>

        <div class="d-flex flex-wrap">
            <?php
            for ($i = 0; $i < 5; $i++) :
            ?>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">State</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Population:</li>
                            <li>Temperature:</li>
                            <li>Size:</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Visit</button>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

    </div>
</body>

</html>