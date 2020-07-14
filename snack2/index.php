<?php
// SNACK 2
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

if (empty($name) || empty($email) || empty($age)) {
  $accesso = 'Accesso negato';
}elseif (strlen($name) <= 3) {
  $accesso = 'Accesso negato';
}elseif (strpos($email, '@') === false || strpos($email, '.') === false) {
  $accesso = 'Accesso negato';
}elseif (is_numeric($age)=== false) {
  $accesso = 'Accesso negato';
}else {
  $accesso = 'Accesso consentito';
}
?>
<p>ciao: <?php echo $name, ' , ', $accesso; ?></p>
