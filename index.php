<body>
<form method="post" id="form">
    <input id="pseudo" type="text" name="pseudo" value=""><br>
    <input id="message" type="text" name="message" value=""><br>
    <input type="submit" value="send message">
</form>
<div id="histo"></div>
</body>
<?php

$pseudo = isset($_POST['pseudo'])?$_POST['pseudo']:"";
$message = isset($_POST['message'])?$_POST['message']:"";
$dbh = new PDO('mysql:host=localhost;dbname=histomessage', "root", "");
if ($message != "") {
    $dbh->query('INSERT INTO `histomessage`.`chat` (`Pseudo`, `message`) VALUES ("' . $pseudo . '", "' . $message . '");');
}
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="getbdd.js"></script>
<script type="text/javascript" src="sendform.js"></script>
