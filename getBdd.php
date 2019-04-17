<?php
header("Access-Control-Allow-Origin: *");
$dbh = new PDO('mysql:host=localhost;dbname=histomessage', "root", "");
$reponse = $dbh->query('SELECT * FROM `histomessage`.`chat` ORDER BY `id` DESC limit 10');
foreach ($reponse as $row) {
    echo "<table>"
        . "<tr>"
        . "Pseudo : " . $row['Pseudo'] . ", "."<br>"
//        . "date : " . $row['dateEnvoi'] . ", "."<br>"
        . "message n°".$row['id']." : " . $row['message']."<br>"
        . "</tr>"
        . "</table>"
    ;
}