<?php
/*"Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60"*/

$basketMatch = [
  "match1" => [
    "homeTeam" => "Olimpia Milano",
    "homeTeamScore" => "55",
    "visitingTeam" => "Cantu",
    "visitingTeamScore" => "60"
  ],

  "match2" => [
    "homeTeam" => "Atletico",
    "homeTeamScore" => "40",
    "visitingTeam" => "Bimb",
    "visitingTeamScore" => "60"
  ],

  "match3" => [
    "homeTeam" => "Los Angeles",
    "homeTeamScore" => "20",
    "visitingTeam" => "Lakers",
    "visitingTeamScore" => "60"
  ]
];

foreach ($basketMatch as $match) {

  $homeTeam = $match['homeTeam'];
  $homeTeamScore = $match["homeTeamScore"];
  $visitingTeam = $match["visitingTeam"];
  $visitingTeamScore= $match["visitingTeamScore"];

  echo $homeTeam ." - " . $visitingTeam . " | " . $homeTeamScore . "-" . $visitingTeamScore . "<br>";
}

 ?>

<?php
// Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"


$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

$nameLength = strlen($name);
$mailVerify = strpos($mail,".") !== false && strpos($mail,"@"); !== false;
$netPos = strpos($mail,"@");

if($nameLength>3 && $mailVerify && is_numeric($age)){
  echo "Accesso riuscito";
} else{
  echo "Accesso Negato";
};

 ?>

 <?php
 // Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

 $newArray=[];

 while(count($newArray) <= 15){

   $varNum = rand(1,80);

     if (!in_array($varNum, $newArray)) {

       $newArray[] = $varNum;
     }

 };

 echo "<br>";
 print_r($newArray);

  ?>
