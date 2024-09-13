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

    <?php
        include '/apache/htdocs/FrogsKnow/includes/db/db.php';
        $db = connectDB();
    ?>
    

    <main class="blog">
        <h1>Articles</h1>
        <div class="entries-container">
            <?php
            $articles = obtainArticles($db);
            $db -> close(); 

            foreach($articles as $article) {
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
                            <p class=intro>'.htmlspecialchars($article['introduction']).'</p>
                        </div>
                    </a>
                </article>
                ';
            }
           ?>
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