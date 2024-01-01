<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ct.css"> 
    <title>Dispo</title>
</head>
<body>
    
</body>
</html>
<section>
        <h2>Nos Caftans et Takchita Disponibles</h2>
        <?php
        // Connectez-vous à votre base de données et récupérez les caftans disponibles
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crudPoo6";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM caftans";
        $result = $conn->query($sql);

        if ($result !== false && $result->num_rows > 0) {
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row["nom"] . " " . $row["prix"] . " dhs par jour</li>";
            }
            echo "</ul>";
        } else {
            echo "Aucun caftan disponible pour le moment.";
        }

        $sql = "SELECT * FROM takchita";
        $result = $conn->query($sql);

        if ($result !== false && $result->num_rows > 0) {
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row["nom"] . " " . $row["prix"] . " dhs par jour</li>";
            }
            echo "</ul>";
        } else {
            echo "Aucun takchita disponible pour le moment.";
        }

        $conn->close();
        echo '<a href="home.php" class="box-button">back home</a>';
        ?>
    </section>