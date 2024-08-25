<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="content.css">
</head>

<body>
    <header>
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
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/content">Content</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </header>

    <div id="content" class="container">
        <div class="d-flex justify-content-center">
            <h1>Content</h1>
        </div>

        <div class="projects">
            <div class="myProjects">
                <img src="https://img.freepik.com/free-vector/pink-neon-glow-number-1-vector-font-typography_53876-168066.jpg?t=st=1724505508~exp=1724509108~hmac=dc46bb24ea3f7fd39f064a238fc9636f09770eabf9cf0ec0846f56ad164058e7&w=740"
                    alt="Project 1">
                <p>Project 1</p>
            </div>

            <div class="myProjects">
                <img src="https://img.freepik.com/free-vector/pink-neon-glow-number-2-vector-font-typography_53876-174689.jpg?t=st=1724505730~exp=1724509330~hmac=f0a8c6a57ba4b30352dc100199b94ef1b247bdccfcdcf854c8a12008720f0e5e&w=740"
                    alt="Project 2">
                <p>Project 2</p>
            </div>

            <div class="myProjects">
                <img src="https://img.freepik.com/free-vector/pink-neon-glow-number-3-vector-font-typography_53876-168067.jpg?t=st=1724505741~exp=1724509341~hmac=59ce5a25c37b70a9c960351bb357c6f3dbb6b6ec52af3b12d9c319abb08873e0&w=740"
                    alt="Project 3">
                <p>Project 3</p>
            </div>
        </div>
    </div>

</body>

</html>