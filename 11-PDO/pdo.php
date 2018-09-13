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
$pdo = new PDO('mysql:host=localhost;dbname=salaries', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//$resultat = $pdo -> query("quiiwi");

try{


    //$resultat = $pdo -> query("qiiiwiwiiwi");



    $prenom = 'Amandine';
    $nom = 'Thoyer';

    // marqueur ? :
    // $resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = ? AND nom = ?");
    // $resultat -> execute(array($prenom,$nom));





    // marqueur nominatif ':' :
    // $resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = :prenom AND nom = :nom");
    // $resultat -> execute(array(':nom' => $nom, ':prenom' => $prenom));


    // marqueur nominatiff ':' + bindParam()
    // $resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = ? AND nom = ?");

    // $resultat -> bindParam(':prenom', $prenom, PDO::PARAM_STR);
    // $resultat -> bindParam(':nom', $nom, PDO::PARAM_STR);
    // //$resultat -> bindParam(':code_postal', $code_postal, PDO::PARAM_INT);
    
    // $resultat -> execute();

    // Fetch vs FetchALL (requete select avec plusieurs résultats)

    // Fetch
   // $resultat = $pdo -> query("SELECT * FROM inscrit");
    //$resultat = OBJ PDOStatement
    //$resultat = INEXPLOITABLE
    //Combien de  résultat à la requête : PLUSIEURS ===> Boucle

    // while($employes = $resultat -> fetch(PDO::FETCH_ASSOC)){

    //     echo '<pre>';
    //     print_r($employes);
    //     echo '</pre>';


    //     echo '<ul>';
    //     foreach($employes as $valeur){
    //         echo '<li>' . $valeur . '</li>';
    //     }
    //     echo '</ul>';
    // }

    // FetchAll
    $resultat = $pdo -> query("SELECT * FROM inscrit");
    //$resultat = OBJ PDOStadement
    //$resultat = INEXXPLOITABLE en l'état
    //Un ou plusieurs résultat : plusieurs ==> Boucle ou fetchAll
    $employes = $resultat ->fetchAll(PDO::FETCH_ASSOC);
    // echo '<pre>';
    // print_r($employes);
    // echo '</pre>';

    foreach($employes as $emp){
        echo '<h3>' . $emp['pseudo'] . '</h3>';
        echo '<ul>';
        foreach($emp as $valeur){
            echo '<li>' . $valeur . '</li>';
        }
        echo '</ul>';
    }




}
catch(PDOException $e){
    echo '<div style="background:blue; padding: 10px; color: white">';
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

