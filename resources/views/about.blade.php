<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="about.css">
</head>

<body>
    <header>
        <img class="bg_img"
            src="https://images.unsplash.com/photo-1463171379579-3fdfb86d6285?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Home_bg_img">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">Laravel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/content">Content</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="about" class="container">
        <div class="d-flex justify-content-center">
            <h1>About</h1>
        </div>

        <div class="d-flex justify-content-center">
            <div class="img_container">
                <img class="about_img"
                    src="https://scontent.fmnl13-1.fna.fbcdn.net/v/t39.30808-6/379676475_6705652826137969_1849771600815602370_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEifS8JpKttA5tDuJqfEFtYYalv_UIvPoBhqW_9Qi8-gNo_ogSf9ec7oRGvKK5vzdGQ2oa-yVsL1uOYEnj_FhAf&_nc_ohc=2QB5nrWyigoQ7kNvgHvZ1Ml&_nc_ht=scontent.fmnl13-1.fna&oh=00_AYDZkwoD2s8MI_VvCQxnkQdJ0o7ngzC-gNYnX5wn-uUc_w&oe=66CFA36F">
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <div class="description">
                <p>
                    Hi! My name is Laiza Mae B. Barias, currently a 3rd year IT student at Bicol University.<br>
                    This will be my first project using Laravel.
                </p>
            </div>
        </div>
    </div>

</body>

</html>