<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frogs Know</title>
    <link rel="stylesheet" href="build/css/specie.css">
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

    <main>
        <?php
        
        include '/apache/htdocs/Proyecto2/includes/db/db.php';
        // Obtener Nombre de la especie
        if (isset($_GET['name'])) {
            $name = urldecode($_GET['name']);
            $db = conectDB();
            $specie = obtainInfoSpecie($db, $name);
            $db->close();
        
            if (! $specie) {
                echo 'No se encontró la especie :(';
            }

            else {

                echo '
                <section class="title-specie">
                    <a href="species.php">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M9 14l-4 -4l4 -4" />
                            <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                        </svg>
                    </a>
                    <h1>'.htmlspecialchars($specie['name']).'</h1>
                </section>
                <picture class="pic">
                    <!--<source srcset="build/img/green_frog.webp" type="image/webp">-->
                    <source srcset="build/img/'.htmlspecialchars($specie['picture']).'.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/'.htmlspecialchars($specie['picture']).'.jpg" alt="specie">
                </picture>
                <p>'.htmlspecialchars($specie['description']).'</p>
                <div class="info-specie">
                    <div class="characteristic">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M3.6 9h16.8" />
                            <path d="M3.6 15h16.8" />
                            <path d="M11.5 3a17 17 0 0 0 0 18" />
                            <path d="M12.5 3a17 17 0 0 1 0 18" />
                        </svg>
                        <p><span>Location:</span> '.htmlspecialchars($specie['continent']).'</p>
                    </div>

                    <div class="characteristic">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>
                        <p><span>Population: </span> '.htmlspecialchars($specie['population']).' individuals</p>
                    </div>

                    <div class="characteristic">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-paint" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                            <path d="M19 6h1a2 2 0 0 1 2 2a5 5 0 0 1 -5 5l-5 0v2" />
                            <path d="M10 15m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                        </svg>
                        <p><span>Color: </span> '.htmlspecialchars($specie['color']).'</p>
                    </div>

                    <div class="characteristic">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-signature" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 17c3.333 -3.333 5 -6 5 -8c0 -3 -1 -3 -2 -3s-2.032 1.085 -2 3c.034 2.048 1.658 4.877 2.5 6c1.5 2 2.5 2.5 3.5 1l2 -3c.333 2.667 1.333 4 3 4c.53 0 2.639 -2 3 -2c.517 0 1.517 .667 3 2" />
                        </svg>
                        <p><span>Scientific name:</span> '.htmlspecialchars($specie['name_scientific']).'</p>
                    </div>
                </div>
                </div> 
                ';
            } 
        } else {
            echo 'Error al obtener especie';
        }

        ?> 
    </main>
    

    <footer class="footer">
        <nav class="naveg">
            <a href="species.php">Species</a>
            <a href="blog.php">Blog</a>
            <a href="contact.html">Contact</a>
        </nav>
    </footer>


    <script src="build/js/bundle.min.js"></script>
</body>
</html>