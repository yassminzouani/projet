<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ct.css"> 
    <title>Chic Beldi </title>
</head>
<body>

    <header>
        <h1>Chics Beldi</h1>
        <p>Bienvenue dans notre boutique de location de caftans et takchita.</p>
    </header>

    <section>
        <h2>Nos Takchita  </h2>
        <form action="" method="post">
        <label for="takchita">Choisissez une takchita :</label>
        <select name="takchita" id="takchita">
            <option value="takchita1">takchita jaune</option>
            <option value="takchita2">takchita verte</option>
            <input type="submit" value="Afficher les détails" name="submit">
            
        </select>
    
        
    </form>
    </section>
<?php


class takchita{
    private $id;
    private $nom;
    private $prix;
    private $description;
    

    // Constructeur
    public function __construct($nom, $prix='', $description = '', $imagePath = '') {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->description = $description;
       
    }

    // obtenir l'ID 
    public function getId() {
        return $this->id;
    }

    // définir l'ID 
    public function setId($id) {
        $this->id = $id;
    }

    // obtenir le nom 
    public function getNom() {
        return $this->nom;
    }

    // pour obtenir le prix 
    public function getPrix() {
        return $this->prix;
    }

    // obtenir la description 
    public function getDescription() {
        return $this->description;
    }
    

    

    public function afficherDetails() {
        echo "<div>";
        echo "<h2>{$this->nom}</h2>";
        echo "<p>Prix: " . $this->prix . " Dhs</p>";
        echo "<p>Description: " . $this->description . "</p>";
        echo "</div>";
    }
}

$takchita1 = new takchita("takchita jaune", 500, "takchita traditionnelle en jaune taille standart ");
$takchita2 = new takchita("takchita vert", 550, "takchita élégante en vert ");

echo "<h3>Details du takchita </h3>";
$takchita1->afficherDetails();
echo '<img src="tj.png" alt="tkchita " style="width: 100px;">';

echo "<h3>Details du takchita </h3>";
$takchita2->afficherDetails();
echo '<img src="tv.png" alt="tkchita" style="width: 100px;">';




echo '<a href="home.php" class="box-button">back home</a>';

?>


</body>
</html>