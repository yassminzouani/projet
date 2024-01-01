<?php
require('config.php');
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `Clients` WHERE email=?";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $email;
            session_regenerate_id(true); // Regenerate session ID for security
            header("Location: home.php");
            exit();
        } else {
            $message = "Email ou le mot de passe est incorrect.";
        }
    } else {
        $message = "Email ou le mot de passe est incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <form class="box" action="" method="post" name="login">
    <h1 class="box-title">Connexion</h1>
    <input type="email" class="box-input" name="email" placeholder="enter email" required>
    <input type="password" class="box-input" name="password" placeholder="enter password" required>
    <input type="submit" value="Connexion" name="submit" class="box-button">
    <p>Vous êtes nouveau ici? <a href="create.php">S'inscrire</a></p>
    <?php if (!empty($message)) { ?>
      <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>
  </form>
</body>
</html>



