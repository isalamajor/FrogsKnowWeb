<?php

    function connectDB() : mysqli {
        $db = mysqli_connect('localhost', 'root', 'root', 'frogsknow');
        if (!$db) {
            echo "No se pudo conectar db";
        }
        return $db;
    }

    function obtainSpecies($db) : array {
        $sql = "SELECT name, continent, short_description, picture FROM species";
        $query = mysqli_query($db, $sql);


        // Obtener los resultados
        if ($query->num_rows > 0) {
            $species = [];
            while ($row = mysqli_fetch_assoc($query)) {
                $species[] = $row;
            }
            return $species;
        } else {
            return [];
        }    
    }

    function obtainInfoSpecie($db, $name) : array {
        $name = $db->real_escape_string($name);
        $sql = "SELECT * FROM species WHERE name = ?";
        
        // Preparar la consulta
        if ($stmt = $db->prepare($sql)) {
        
        // Vincular el parámetro ('s' de string)
        $stmt->bind_param('s', $name); 

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener el resultado
        $result = $stmt->get_result();

        // Imprimir resultado para depuración
        if ($result) {
            if ($result->num_rows > 0) {
                $info = $result->fetch_assoc();
                return $info;
            } else {;
                return [];
            }
        } else {
            echo 'Error en la consulta: ' . $stmt->error;
            return [];
        }
    }
    }

    function obtainArticles($db) : array {
        $sql = "SELECT title, subtitle, date, name, lastname, introduction, content, picture FROM article JOIN author ON article.author_id = author.id ORDER BY date DESC";
        $query = mysqli_query($db, $sql);

        // Obtener los resultados
        if ($query->num_rows > 0) {
            $articles = [];
            while ($row = mysqli_fetch_assoc($query)) {
                $articles[] = $row;
            }
            return $articles;
        } else {
            return [];
        }    
    }

    function obtainInfoArticle($db, $title) : array {
        $title = $db->real_escape_string($title);
        $sql = "SELECT * FROM article JOIN author ON article.author_id = author.id WHERE article.title = ?";
        
        // Preparar la consulta
        if ($stmt = $db->prepare($sql)) {
        
        // Vincular el parámetro ('s' de string)
        $stmt->bind_param('s', $title); 

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener el resultado
        $result = $stmt->get_result();

        // Imprimir resultado para depuración
        if ($result) {
            if ($result->num_rows > 0) {
                $info = $result->fetch_assoc();
                return $info;
            } else {;
                return [];
            }
        } else {
            echo 'Error en la consulta: ' . $stmt->error;
            return [];
        }
    }
    }
?>