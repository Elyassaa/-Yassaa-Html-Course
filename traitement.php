<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
echo "nom: " . htmlspecialchars($nom) . "<br>";
echo "email: " . htmlspecialchars($email) . "<br>";

?>