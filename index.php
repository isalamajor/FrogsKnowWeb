<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frogs Know</title>
    <link rel="stylesheet" href="build/css/principal.css">
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

            <h1 class="titulo">Learn about frogs and toads</h1>
        </div>
    </header>

    <?php 
        include '/apache/htdocs/FrogsKnow/includes/db/db.php';
        $db = connectDB();
        $species = obtainSpecies($db);
        $articles = obtainArticles($db);
        
        // Cerrar la conexión
        $db->close();
    ?>

    <main class="contenedor">
        <h1>About frogs</h1>
        <section class="about">
            <div class="kingdom">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-crown" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z" />
                </svg>
                <h2>Kingdom</h2>
                <p>Frogs belong to the animal kingdom Animalia and are classified as amphibians, known for their ability to live both in water and on land.</p>
            </div>
            <div class="habitat">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-seeding" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 10a6 6 0 0 0 -6 -6h-3v2a6 6 0 0 0 6 6h3" />
                    <path d="M12 14a6 6 0 0 1 6 -6h3v1a6 6 0 0 1 -6 6h-3" />
                    <path d="M12 20l0 -10" />
                </svg>
                <h2>Habitat</h2>
                <p>Frogs thrive in moist environments like ponds, swamps, and rainforests, where they find water for breeding and shelter among vegetation
                </p>
            </div>
            <div class="habitat">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cherry" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M7.5 16.5m-3.5 0a3.5 3.5 0 1 0 7 0a3.5 3.5 0 1 0 -7 0" />
                    <path d="M17 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    <path d="M9 13c.366 -2 1.866 -3.873 4.5 -5.6" />
                    <path d="M17 15c-1.333 -2.333 -2.333 -5.333 -1 -9" />
                    <path d="M5 6c3.667 -2.667 7.333 -2.667 11 0c-3.667 2.667 -7.333 2.667 -11 0" />
                </svg>
                <h2>Feeding</h2>
                <p>Frogs primarily feed on insects and other small invertebrates, using their long, sticky tongues to catch prey.</p>
            </div>

        </section>
    </main>

    <section>
        <h1>Species</h1>
        <p class="introduction">There's so many different frog species, go check some!</p>

        <a href="species.php">
            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-right-line" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-6v-6h6z" />
                <path d="M3 9v6" />
            </svg>
        </a>

        <div class="container-species">
        
        <?php 
            $firstThreeSpecies = array_slice($species, 0, 3);
            foreach ($firstThreeSpecies as $specie) {
                echo '
                <a href="specie.php?name='.urlencode($specie['name']).'" class="link-container">
                    <div class="specie">
                        <picture class="pic">
                            <source srcset="build/img/'.$specie['picture'].'.jpg" type="image/jpg">
                            <img loading="lazy" src="build/img/'.$specie['picture'].'.jpg" alt="'.$specie['name'].'">
                        </picture>
                        <h3>'.htmlspecialchars($specie['name']).'</h3>
                        <p>'.htmlspecialchars($specie['short_description']).'</p>
                        <div class="location">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M3.6 9h16.8" />
                                <path d="M3.6 15h16.8" />
                                <path d="M11.5 3a17 17 0 0 0 0 18" />
                                <path d="M12.5 3a17 17 0 0 1 0 18" />
                            </svg>
                            '.htmlspecialchars($specie['continent']).'
                        </div>
                    </div>
                </a>
                ';
            }
            
        ?>   
        </div>
    </section>

    <div class="blog-quote">
        <section class="blog">
            <h1>The pond blog</h1>
            <div class="entries-container">
            <?php
                $firstTwoArticles = array_slice($articles, 0, 2);
            
                foreach($firstTwoArticles as $article) {
                    echo '
                    <article class="blog-entry">
                        <a href="article.php?title='.urlencode($article['title']).'" class="link-container">
                            <div class="pic">
                                <picture>
                                    <!--<source srcset="build/img/name.jpg" type="image/jpg">-->
                                    <source srcset="build/img/'.htmlspecialchars($article['picture'] ).'.jpg" type="image/jpg">
                                    <img loading="lazy" src="build/img/'.htmlspecialchars($article['picture'] ).'.jpg" alt="pond">
                                </picture>
                            </div>

                            <div class="text-entry">
                                <a class="title-article" href="article.php?title='.urlencode($article['title']).'"><h4>'.htmlspecialchars($article['title']).'</h4></a>
                                <p>Written day <span>'.htmlspecialchars($article['date']).'</span> by <span>'.htmlspecialchars($article['name'] ).' '.htmlspecialchars($article['lastname'] ).'</span></p>
                                <p>'.htmlspecialchars($article['subtitle']).'</p>
                            </div>
                        </a>
                    </article>
                    ';
                }
            ?>
            </div>
        </section>

        <section class="quote">
            <h1>New...</h1>
            <blockquote>"Intense quote about frogs and toads..."</blockquote>
        </section>
    </div>
    

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