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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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
                            <a class="nav-link" aria-current="page" href="/homepage">Home</a>
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

    <main>
        <section id="about" class="container">
            <div class="d-flex justify-content-center">
                <h1>My Team</h1>
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

            <div class="d-flex justify-content-center mt-4">
                <div class="contact-icons">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-envelope-fill me-2"></i>
                        <span>lmbarias.ph@gmail.com</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <span>09055454558</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="overview" class="container mt-5">
            <div class="text-center mb-4">
                <h2 class="title">Project Overview</h2>
                <p class="text">This Laravel project aims to demonstrate the fundamental features of the
                    framework. It includes a dynamic homepage, an informative about page, and a content section to
                    explore various aspects of Laravel.</p>

            </div>
        </section>

        <section id="technology" class="container mt-5">
            <div class="text-center mb-4">
                <h2 class="title">Technology Used</h2>
                <p class="text">The project utilizes Laravel for server-side development, Bootstrap for styling,
                    and various front-end technologies to create a responsive and functional web application.</p>
            </div>
        </section>


        <section id="goals" class="container mt-5">
            <div class="text-center mb-4">
                <h2 class="title">Future Goals</h2>
                <p class="text">In the future, I plan to expand this project with more advanced features,
                    including user authentication and data management. I aim to
                    continually improve my skills and the project itself.</p>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white mt-5 p-4 text-center">
        <p>&copy; 2024 Laiza's Laravel Project. All Rights Reserved.</p>
    </footer>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script>
        // navbar scroll
        const navEl = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY >= 56) {
                navEl.classList.add('navbar_scrolled');
            } else if (window.scrollY < 56) {
                navEl.classList.remove('navbar_scrolled');
            }
        });

        // auto type
        var typed = new Typed('.auto_type', {
            strings : ["Laravel Project", "Laravel Project"],
            typeSpeed : 100,
            backSpeed: 100,
            loop:true
        })
    </script>
</body>

</html>