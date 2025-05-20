<?php
session_start();
require 'bdd.php';

// Récupérer les données du formulaire
if (!isset($_SESSION['id'])){
    header('location:accueil.php');
}
    
    $id=$_SESSION['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $telephone = $_POST['telephone'];
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $mot_de_passe = $_POST['mot_de_passe'];
    
    // Mettre à jour les données avec une requête préparée
    $sql = "UPDATE compte1 SET nom = :nom, prenom = :prenom, age = :age, telephone = :telephone, nom_utilisateur = :nom_utilisateur, mot_de_passe = :mot_de_passe WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    // Lier les paramètres
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':nom_utilisateur', $nom_utilisateur);
    $stmt->bindParam(':mot_de_passe', $mot_de_passe);

    // Exécuter la requête
    if ($stmt->execute()) {
        echo "Mise à jour effectuée !!";
    } else {
        echo "Erreur de mise à jour: " . implode(":", $stmt->errorInfo());
    }

?>
