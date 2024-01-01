<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details du Caftan</title>
</head>
<body>
    <section>
        <?php
        INCLUDE("caftan.php");

        if (isset($_POST['submit'])) {
            $selectedCaftan = $_POST['caftan'];

            /
            if ($selectedCaftan == 'caftan1') {
                $caftan = new Caftan("Caftan Bleu", 350, "Caftan traditionnel en bleu", "cb.jpg");
            } elseif ($selectedCaftan == 'caftan2') {
                $caftan = new Caftan("Caftan Rouge", 450, "Caftan élégant en rouge", "cr.jpg");
            } elseif ($selectedCaftan == 'caftan3') {
                $caftan = new Caftan("Caftan Noir", 400, "Caftan sobre en noir", "cn.jpg");
            }

            // Affichez les détails du caftan sélectionné
            echo "<h2>Details du caftan choisi</h2>";
            $caftan->afficherDetails();
        } else {
    
            header("Location: caftan.php");
            exit();
        }
        ?>
    </section>
</body>
</html>


