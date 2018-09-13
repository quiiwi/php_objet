<?php

/**
 * Les différentes fonctions pour exécuter une requête :
 * 
 * query() : - SELECT - SHOW
 *           - Succès : PDOStatement (obj)
 *           - Echec : FALSE (Bool)
 * 
 * exec() :  - INSERT - DELETE - REPLACE - UPDATE
 *           - Succès : X (int) correspond au nombre d'enregistrement affectés pas la requête
 *           - Echec : FALSE (bool)
 * 
 * prepare() + execute() :
 *           - Dès qu'on a une information sensible (GET / POST) dans la requête.
 *           -> prepare() :
 *              - Succès : PDOStatement (obj)
 *              - Echec : False (Bool)
 *           -> execute () :
 *              - Succès : True (Bool)
 *              - Echec : False (Bool)
 */

// 1: Connexion sans erreur :
//$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '');
//$resultat = $pdo -> query("quiiwi");

// 2: Connexion en mode erreur :
//$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE -> PDO::ERRMODE_WARNING));
//$resultat = $pdo -> query("quiiwi");

// 3: Connexion en mode erreur Exeption:
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//$resultat = $pdo -> query("quiiwi");

try{


    //$resultat = $pdo -> query("qiiiwiwiiwi");



    $prenom = 'Amandine';
    $nom = 'Thoyer';

    // marqueur ? :
    $resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = ? AND nom = ?");
    $resultat -> execute(array($prenom,$nom));





    // marqueur nominatif ':' :
    $resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = :prenom AND nom = :nom");
    $resultat -> execute(array(':nom' => $nom, ':prenom' => $prenom));







}
catch(PDOException $e){
    echo '<div style="background:red; padding: 10px; color: white">';
    echo 'Erreur SQL : <br>';
    echo 'Erreur : ' . $e -> getMessage() . '<br>';
    echo 'Fichier :' . $e -> getFile() . '<br>';
    echo 'Ligne :' . $e -> getLine() . '<br>';
    echo '</div>';

    $f = fopen('erreur.txt', 'a');
    $ligne = 'Erreur SQL : ' . date('d/m/Y h:i:s') . '<br>' . "\r\n"; // "\r\n" permet de passer à la ligne dans le code source
    fwrite($f, $ligne);
    exit;
}

