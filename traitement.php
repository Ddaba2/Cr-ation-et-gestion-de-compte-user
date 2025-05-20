<?php
require 'bdd.php';

session_start();

if (isset( $_GET['create_count'])) {
  
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$age = $_GET['age'];
$telephone = $_GET['telephone'];
$nom_utilisateur = $_GET['nom_utilisateur'];
$password = $_GET['password'];      
$confirmer_mot_de_passe = isset($_POST['confirmer_mot_de_passe']) ? $_POST['confirmer_mot_de_passe'] : '';

// Hash le mot de passe avant de l'utiliser dans la requête
$mot_de_passe = md5($password);
$sql = "INSERT INTO compte1 (nom, prenom, age, telephone, nom_utilisateur, mot_de_passe, confirmer_mot_de_passe) VALUES (:nom, :prenom, :age, :telephone, :nom_utilisateur, :mot_de_passe, :confirmer_mot_de_passe)";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':age', $age);
$stmt->bindParam(':telephone', $telephone);
$stmt->bindParam(':nom_utilisateur', $nom_utilisateur);
$stmt->bindParam(':mot_de_passe', $mot_de_passe);
$stmt->bindParam(':confirmer_mot_de_passe', $confirmer_mot_de_passe);

$stmt->execute();

echo("Bonjour, $nom_utilisateur!!");
header('location:Bienvenue.php');
}
if (isset( $_GET['connexion'])) {
    
    $nom_utilisateur = $_GET['nom_utilisateur'];
    $password = $_GET['password'];
   
    $mot_de_passe = md5($password);

// Connexion à la base de données
$stmt = $pdo->prepare("SELECT * FROM compte1 WHERE nom_utilisateur = '$nom_utilisateur' AND Mot_de_passe = '$mot_de_passe' " );

    $stmt->execute();
    $resultats = $stmt->fetch(PDO::FETCH_ASSOC); 
    $count= $stmt->rowCount();

    if($count==0){
echo "Compte inexitant";
header('location:erreur.php');

    }else{

        $_SESSION['id']=$resultats['id'];
        $_SESSION['nom']=$resultats['nom'];
        $_SESSION['prenom']=$resultats['prenom'];
        $_SESSION['telephone']=$resultats['telephone'];
        $_SESSION['nom_utilisateur']=$resultats['nom_utilisateur'];

        echo "Bienvenue sur la page!!";
        header('location:Bienvenue.php');
    }
    
}

if (isset( $_GET['create_count'])) {
    
    $nom_utilisateur = $_GET['nom_utilisateur'];
    $password = $_GET['password'];

// Connexion à la base de données

    $stmt = $pdo->prepare('SELECT * FROM compte1 WHERE nom_utilisateur = ? AND Mot_de_passe = ?');
    
    $stmt->execute([$nom_utilisateur, $password]);

    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC); 
}
?>

