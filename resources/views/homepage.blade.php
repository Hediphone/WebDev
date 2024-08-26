<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="homepage.css">

</head>

<body>
    <header>
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
                            <a class="nav-link active" aria-current="page" href="/homepage">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
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
        <section id="banner">
            <img class="bg_img"
                src="https://images.unsplash.com/photo-1463171379579-3fdfb86d6285?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Home_bg_img">

            <div class="banner_title">
                <h1>Laiza's <span class="auto_type"></span></h1>
            </div>
        </section>

        <section id="introduction" class="container mt-5">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2>Welcome to My Laravel Project</h2>
                    <p class="lead">This is a sample Laravel project demonstrating various features of the framework.
                        Explore the site to learn more about what Laravel can do!</p>
                </div>
            </div>
        </section>

        <section id="features" class="container mt-5">
            <div class="row text-center">
                <div class="col-md-4">
                    <h3>Simple Setup</h3>
                    <img class="img-fluid mb-3" src="setup.png" alt="Setup Img">
                    <p>Get started quickly with Laravel’s simple setup process, perfect for beginners and advanced users
                        alike.</p>
                </div>
                <div class="col-md-4">
                    <h3>Highly Customizable</h3>
                    <img class="img-fluid mb-3" src="customize.png" alt="Customize Img">
                    <p>Laravel offers extensive customization options to tailor your application to your specific needs.
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>Strong Community Support</h3>
                    <img class="img-fluid mb-3" src="community.png" alt="Community Img">
                    <p>Join a large, active community of developers who contribute to a wealth of resources and
                        tutorials.</p>
                </div>
            </div>
        </section>

        <section id="cta" class="container mt-5">
            <div class="row text-center">
                <div class="col-lg-12">
                    <a href="/about" class="btn btn-coffee btn-lg">Learn More About Us</a>
                </div>
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
            strings: ["Laravel Project", "Laravel Project"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        })
    </script>
</body>

</html>