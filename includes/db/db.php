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
    }

    function obtainInfoSpecie($db, $name) : array {
        $name = $db->real_escape_string($name);
        $sql = "SELECT * FROM species WHERE name = ?";
        
        // Preparar la consulta
        if ($stmt = $db->prepare($sql)) {
        
            // Vincular el parámetro
        $stmt->bind_param('s', $name); // 's' de string

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener el resultado
        $result = $stmt->get_result();

        // Imprimir resultado para depuración
        if ($result) {
            if ($result->num_rows > 0) {
                $info = $result->fetch_assoc();
                return $info;
            } else {
                echo 'No se encontró la especie :(';
                return [];
            }
        } else {
            echo 'Error en la consulta: ' . $stmt->error;
            return [];
        }
    }
    }
?>