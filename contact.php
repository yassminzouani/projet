<!DOCTYPE html>
<html>
<head>
    <title>Contact - Caftan et Takchita</title>
    <link rel="stylesheet" href="ct.css" />
</head>
<body>
    <h1>Contact</h1>

    <div>
        <h2>Contactez-nous</h2>
        <p>Si vous avez des questions ou des commentaires, n'hésitez pas à nous contacter.</p>
        <form action="home.php" method="post">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <input type="submit" value="Envoyer">
        </form>
    </div>

    
</body>
</html>