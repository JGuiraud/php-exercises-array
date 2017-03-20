<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php Arrays</title>
</head>
<body>

<?php

// ------------------------------  EXERCICE 1
echo'<h2>Exercice 1</h2>';
echo "<p>Créer un tableau **mois** et l'initialiser avec les valeurs suivantes :
- **janvier**
- **février**
- **mars**
- **avril**
- **mai**
- **juin**
- **juillet**
- **aout**
- **septembre**
- **octobre**
- **novembre**</p>";

$mois = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
var_dump($mois);

echo '<hr>';

echo '<h2>Exercice 2</h2>';
echo "<p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tablea</p>";

echo $mois[2];

echo '<hr>';

// ---------------------- EXERCICE 3
echo '<h2>Exercice 3</h2>';
echo "<p>Avec le tableau de l'exercice , afficher la valeur de l'index 5.</p>";

echo array_search("juin", $mois);
echo ' | '.$mois[5];

echo'<hr>';

//---------------- EXERCICE 4
echo'<h2>Exercice 4</h2>';
echo "<p>Avec le tableau de l'exercice 1, modifier le mois de **aout** pour lui ajouter l'accent manquant.</p>";

$mois[7] = "août";
echo $mois[7];;

echo '<hr>';

// --------------- EXERCICE 5
echo '<h2>Exercice 5</h2>';
echo '<p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>';

$hautDeFrance = array(
02 => "Aisne",
59 => "Nord",
60  => "Oise",
62 => "Pas-De-Calais",
80 => "Somme",
);

var_dump($hautDeFrance);

echo '<hr>';

// ---------------- EXERCICE 6

echo '<h2>Exercice 6</h2>';
echo "<p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.
</p>";

echo ($hautDeFrance[59]);
// echo strpos("59", $hautDeFrance);


echo '<hr>';

// ----------- EXERCICE 7
echo'<h2>Exercice 7</h2>';
echo "<p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>";

echo'
$hautDeFrance["51"] = "Marne";
 <br><br>';
$hautDeFrance["51"] = "Marne";

var_dump ($hautDeFrance);

echo '<hr>';

// ----------------- EXERCICE 8
echo '<h2>Exercice 8</h2>';
echo "<p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>";

foreach ($hautDeFrance as $key => $value) {
    echo "$key => $value<br>";
}

echo '<hr>';


// ------------------ EXERCICE 9
echo '<h2>Exercice 9</h2>';
echo "<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>";

foreach ($hautDeFrance as $key => $value) {
    echo "$value <br>";
}


echo '<hr>';

//------------------- EXERCICE 10

echo '<h2>Exercice 10</h2>';
echo "<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme : **'Le département' + nom_departement + 'a le numéro' + num_departement**</p>";

foreach ($hautDeFrance as $key => $value) {
    echo 'Le département '.$value.' a le numéro '.$key.'<br>';
    // echo 'Le département '.$value ' a le numéro '.$key;
}


?>

</body>
</html>