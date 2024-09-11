<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frogs Know</title>
    <link rel="stylesheet" href="build/css/species.css">
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

            <h1 class="titulo">Some interesting species</h1>
        </div>
    </header>

    <?php 
        include '/apache/htdocs/Proyecto2/includes/db/db.php';
        $db = conectDB();
    ?>

    <h1>Every cool species</h1>
    <div class="container-species">
        
        <a href="specie.php" class="link-container">
        <div class="specie">
            <picture class="pic">
                <!--<source srcset="build/img/green_frog.webp" type="image/webp">-->
                <source srcset="build/img/green_frog.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/green_frog.jpg" alt="specie">
            </picture>
            <h3>Specie 1</h3>
            <p>Short description</p>
            <div class="location">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                    <path d="M3.6 9h16.8" />
                    <path d="M3.6 15h16.8" />
                    <path d="M11.5 3a17 17 0 0 0 0 18" />
                    <path d="M12.5 3a17 17 0 0 1 0 18" />
                </svg>
                Africa
            </div>
        </div>
        </a>
    
        <a href="specie.php" class="link-container">
            <div class="specie">
                <picture class="pic">
                    <!--<source srcset="build/img/green_frog.webp" type="image/webp">-->
                    <source srcset="build/img/blue_frog.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/blue_frog.jpg" alt="specie">
                </picture>
                <h3>Specie 2</h3>
                <p>Short description 2</p>
                <div class="location">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M3.6 9h16.8" />
                        <path d="M3.6 15h16.8" />
                        <path d="M11.5 3a17 17 0 0 0 0 18" />
                        <path d="M12.5 3a17 17 0 0 1 0 18" />
                    </svg>
                    Europe
                </div>
            </div>
        </a>

        <a href="specie.php" class="link-container">
            <div class="specie">
                <picture class="pic">
                    <!--<source srcset="build/img/green_frog.webp" type="image/webp">-->
                    <source srcset="build/img/fat_frog.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/fat_frog.jpg" alt="specie">
                </picture>
                <h3>Specie 3</h3>
                <p>Short description 3</p>
                <div class="location">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M3.6 9h16.8" />
                        <path d="M3.6 15h16.8" />
                        <path d="M11.5 3a17 17 0 0 0 0 18" />
                        <path d="M12.5 3a17 17 0 0 1 0 18" />
                    </svg>
                    Europe
                </div>
            </div>
        </a>

        <a href="specie.php" class="link-container">
            <div class="specie">
                <picture class="pic">
                    <!--<source srcset="build/img/green_frog.webp" type="image/webp">-->
                    <source srcset="build/img/frog2.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/frog2.jpg" alt="specie">
                </picture>
                <h3>Specie 1</h3>
                <p>Short description</p>
                <div class="location">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M3.6 9h16.8" />
                        <path d="M3.6 15h16.8" />
                        <path d="M11.5 3a17 17 0 0 0 0 18" />
                        <path d="M12.5 3a17 17 0 0 1 0 18" />
                    </svg>
                    Africa
                </div>
            </div>
        </a>
    
        <a href="specie.php" class="link-container">
            <div class="specie">
                <picture class="pic">
                    <!--<source srcset="build/img/green_frog.webp" type="image/webp">-->
                    <source srcset="build/img/frog3.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/frog3.jpg" alt="specie">
                </picture>
                <h3>Specie 2</h3>
                <p>Short description 2</p>
                <div class="location">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M3.6 9h16.8" />
                        <path d="M3.6 15h16.8" />
                        <path d="M11.5 3a17 17 0 0 0 0 18" />
                        <path d="M12.5 3a17 17 0 0 1 0 18" />
                    </svg>
                    Europe
                </div>
            </div>
        </a>

        <a href="specie.php" class="link-container">
            <div class="specie">
                <picture class="pic">
                    <!--<source srcset="build/img/green_frog.webp" type="image/webp">-->
                    <source srcset="build/img/frog4.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/frog4.jpg" alt="specie">
                </picture>
                <h3>Specie 3</h3>
                <p>Short description 3</p>
                <div class="location">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M3.6 9h16.8" />
                        <path d="M3.6 15h16.8" />
                        <path d="M11.5 3a17 17 0 0 0 0 18" />
                        <path d="M12.5 3a17 17 0 0 1 0 18" />
                    </svg>
                    Europe
                </div>  
            </div>
        </a>
    
    </div>
<p>Oh, how beautiful frogs are!

</p>
    

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