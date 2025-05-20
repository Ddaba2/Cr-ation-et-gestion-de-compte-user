<!DOCTYPE html>
<html>
<head>
    <title>Profil utilisateur</title>
    <link rel="stylesheet" href="Profil.css">
</head>
<body>

        <?php
            session_start();
            require 'bdd.php';

            // Supposons que l'ID de l'utilisateur connecté soit stocké dans une variable de session

            if (!isset($_SESSION['id'])) {
               
                header('location:accueil.php');
            }
            $user_id = $_SESSION['id'];
           
            $sql = "SELECT nom, prenom, age, telephone, nom_utilisateur, photo, mot_de_passe FROM compte1 WHERE id = $user_id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch();

            echo "<img src='p.png'";
            if ($result) {
                echo "<div class='profile-container'>";
               
                echo "Nom : " . $result["nom"]. "<br>";
                echo "Prénom : " .$result["prenom"] . "<br> ";
                echo "Téléphone : " .$result["telephone"] ."<br> " ;
                echo "Age : " .$result["age"] . " <br>";
                echo "Nom d'utilisateur : " .$result["nom_utilisateur"] ."<br>" ;
                echo "Mot de passe : " .$result["mot_de_passe"] . " <br>";
                echo "</div>";
            } else {
                echo "Utilisateur non trouvé";
            }
        ?>
    

<div class="buttons">
    <button onclick="window.location.href='Modifier.php'">Modifier le profil</button>
</div>

</body>
</html>