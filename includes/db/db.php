<?php

    function conectDB() : mysqli {
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
        
        // Cerrar la conexión
        $conn->close();
    
    }
?>