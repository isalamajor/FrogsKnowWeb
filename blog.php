<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frogs Know</title>
    <link rel="stylesheet" href="build/css/blog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Jersey+10&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>

    
    <header class="header">
        <section class="contenedor">
            <div class="barra">
                <a href="/" class="logo">
                    <img src="build/img/logo.svg">
                    FROGS KNOW
                </a>

            <nav class="naveg">
                <a href="species.php">Species</a>
                <a href="blog.php">Blog</a>
                <a href="contact.html">Contact</a>
            </nav>
            </div> <!--Barra-->

            <h1 class="titulo">The pond blog</h1>
        </div>
    </header>
    

    <main class="blog">
        <h1>Articles</h1>
        <div class="entries-container">
    
            <article class="blog-entry">
                <a href="article.php" class="link-container">
                    <div class="pic">
                        <picture>
                            <!--<source srcset="build/img/green_frog.webp" type="image/webp">-->
                            <source srcset="build/img/pond.jpg" type="image/jpg">
                            <img loading="lazy" src="build/img/pond.jpg" alt="pond">
                        </picture>
                    </div>

                    <div class="text-entry">
                        <a href="article.php"><h4>Entry title</h4></a>
                        <p>Written day <span>26/08/2024</span> by <span>author</span></p>
                        <p>Entry subtitle</p>
                        <p>Entry text...</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum illo odio deserunt accusantium quibusdam, minima tempore enim voluptate recusandae excepturi ad aperiam voluptatem assumenda voluptatibus ut quaerat doloremque cupiditate perferendis.</p>
                    </div>
                </a>
            </article>

            <article class="blog-entry">
                <a href="article.php" class="link-container">
                    <div class="pic">
                        <picture>
                            <!--<source srcset="build/img/green_frog.webp" type="image/webp">-->
                            <source srcset="build/img/waterfall.jpg" type="image/jpg">
                            <img loading="lazy" src="build/img/waterfall.jpg" alt="pond">
                        </picture>
                    </div>

                    <div class="text-entry">
                        <a href="article.php"><h4>Entry title</h4></a>
                        <p>Written day <span>26/08/2024</span> by <span>author</span></p>
                        <p>Entry subtitle</p>
                        <p>Entry text...</p>
                    </div>
                </a>
            </article>

            <article class="blog-entry">
                <a href="article.php" class="link-container">
                    <div class="pic">
                        <picture>
                            <!--<source srcset="build/img/green_frog.webp" type="image/webp">-->
                            <source srcset="build/img/gustavo.jpg" type="image/jpg">
                            <img loading="lazy" src="build/img/gustavo.jpg" alt="pond">
                        </picture>
                    </div>

                    <div class="text-entry">
                        <a href="article.php"><h4>Entry title</h4></a>
                        <p>Written day <span>26/08/2024</span> by <span>author</span></p>
                        <p>Entry subtitle</p>
                        <p>Entry text...</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum illo odio deserunt accusantium quibusdam, minima tempore enim voluptate recusandae excepturi ad aperiam voluptatem assumenda voluptatibus ut quaerat doloremque cupiditate perferendis.</p>
                    </div>
                </a>
            </article>
        </div>
        
    </main>


    <footer class="footer">
        <nav class="naveg">
            <a href="species.php">Species</a>
            <a href="blog.php">Blog</a>
            <a href="contact.html">Contact</a>
        </nav>
        </div>
    </footer>


    <script src="build/js/bundle.min.js"></script>
</body>
</html>