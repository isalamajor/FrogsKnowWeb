<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frogs Know</title>
    <link rel="stylesheet" href="build/css/article.css">
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

    <main>

        <section class="title-article">
            <a href="blog.php">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 14l-4 -4l4 -4" />
                    <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                </svg>
            </a>
            <h1>Title of the article</h1>
        </section>

        <section class="content-article">
            <div class="text-entry">
                <h2>Entry subtitle</h2>
                <p>Written day <span>26/08/2024</span> by <span>author</span></p>
                <p>Entry text...</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum illo odio deserunt accusantium quibusdam, minima tempore enim voluptate recusandae excepturi ad aperiam voluptatem assumenda voluptatibus ut quaerat doloremque cupiditate perferendis.</p>
            </div>

            <picture class="pic">
                <!--<source srcset="build/img/green_frog.webp" type="image/webp">-->
                <source srcset="build/img/waterfall.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/waterfall.jpg" alt="specie">
            </picture>
        </section>
        
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