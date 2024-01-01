<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <link rel="stylesheet" href="ct.css"> 
</head>
<body>

    <header>
        <h1>Chics Beldi</h1>
        <p>Bienvenue dans notre boutique de location de caftans et takchita.</p>
    </header>

    <section>
        <h2>Nos Caftans </h2>
        <label for="caftan">Choisissez un caftan :</label>
        <select name="caftan" id="caftan">
            <option value="caftan1">Caftan Bleu</option>
            <option value="caftan2">Caftan Rouge</option>
            <option value="caftan3">Caftan Noir</option>
        </select>
        <input type="submit" value="Afficher les détails" name="submit">
  
    </section>
<?php
class Caftan{
    private $id;
    private $nom;
    private $prix;
    private $description;
    

    // Constructeur
    public function __construct($nom, $prix='', $description = '') {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->description = $description;
        
    }

    // obtenir l'ID du caftan
    public function getId() {
        return $this->id;
    }

    // définir l'ID du caftan
    public function setId($id) {
        $this->id = $id;
    }

    // obtenir le nom du caftan
    public function getNom() {
        return $this->nom;
    }

    // pour obtenir le prix du caftan
    public function getPrix() {
        return $this->prix;
    }

    // obtenir la description du caftan
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


$caftan1 = new Caftan( "Caftan Bleu", 350, "Caftan traditionnel en bleu");
$caftan2 = new Caftan("Caftan Rouge", 450, "Caftan élégant en rouge");
$caftan3 = new Caftan("Caftan Noir", 400, "Caftan chic en noir");
$caftan4 = new Caftan("Caftan jaune", 300, "Caftan traditionnel pas cher en jaune");


echo "<h3>Details du Caftan </h3>";
$caftan1->afficherDetails();
echo '<img src="cb.png" alt="Caftan Bleu" style="width: 150px;">';

echo "<h3>Details du Caftan </h3>";
$caftan2->afficherDetails();
echo '<img src="cr.png" alt="Caftan Bleu" style="width: 150px;">';

echo "<h3>Details du Caftan </h3>";
$caftan3->afficherDetails();
echo '<img src="cn.png" alt="Caftan noir" style="width: 150px;">';

echo "<h3>Details du Caftan </h3>";
$caftan4->afficherDetails();
echo '<img src="cj.png" alt="Caftan jaune" style="width: 150px;">';

echo '<a href="home.php" class="box-button">back home</a>';






?>
</body>
</html>