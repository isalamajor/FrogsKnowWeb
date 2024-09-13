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
        <?php
            include '/apache/htdocs/FrogsKnow/includes/db/db.php';
            // Obtener Título del artículo
            if (isset($_GET['title'])) {
                $title = urldecode($_GET['title']);
                $db = connectDB();
                $article = obtainInfoArticle($db, $title);
                $db->close();
            
                if (! $article) {
                    echo 'No se encontró el artículo!';
                }

                else {
                    echo '
                    <h1>'.htmlspecialchars($article['title']).'</h1>

                    <section class="content-article">
                        <div class="text-entry">
                            <h2>'.htmlspecialchars($article['subtitle']).'</h2>
                            <p>Written day <span>'.htmlspecialchars($article['date']).'</span> by <span>'.htmlspecialchars($article['name']).' '.htmlspecialchars($article['lastname']).'</span></p>
                            <div class="text-content">
                                <p>'.htmlspecialchars($article['introduction']).'</p>
                                <p>'.htmlspecialchars($article['content']).'</p>
                            </div>
                        </div>

                        <div class=pics>
                            <picture class="pic">
                                <!--<source srcset="build/img/green_frog.webp" type="image/webp">-->
                                <source srcset="build/img/'.htmlspecialchars($article['picture']).'.jpg" type="image/jpg">
                                <img loading="lazy" src="build/img/'.htmlspecialchars($article['picture']).'.jpg" alt="specie">
                            </picture>
                            <picture class="pic">
                                <!--<source srcset="build/img/green_frog.webp" type="image/webp">-->
                                <source srcset="build/img/'.htmlspecialchars($article['picture2']).'.jpg" type="image/jpg">
                                <img loading="lazy" src="build/img/'.htmlspecialchars($article['picture2']).'.jpg" alt="specie">
                            </picture>
                        </div>
                    </section>
                    ';
                }
            }
        ?>
        
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