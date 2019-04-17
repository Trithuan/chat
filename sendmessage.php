<?php
if(isset($_POST['pseudo']) && isset($_POST['message'])){
    echo $pseudo = isset($_POST['pseudo'])?$_POST['pseudo']:"paspseudo";
    echo $message = isset($_POST['message'])?$_POST['message']:"pasmessage";
    $dbh = new PDO('mysql:host=localhost;dbname=histomessage', "root", "");
    if ($message != "") {
        $dbh->query('INSERT INTO `histomessage`.`chat` (`Pseudo`, `message`) VALUES ("' . $pseudo . '", "' . $message . '");');
    }
}else echo 'wtf';