<?php
ini_set('display_errors', 'on');
include "models/privilege.model.php";
include "models/user.model.php";
include "models/history.model.php";
include "models/authorization.model.php";
include "models/spdo.model.php";
include "models/customer.model.php";
?>
<html lang="EN">
<head>
    <title>3elle</title>
</head>
<body>
<h3>Site E-commerce</h3>
<h4>Software engineer : Chrif MELLOULI</h4>
<h5>Customer : STE 3ELLE</h5>
<h5>MANAGER : HENI SCHOURA</h5>
<?php
echo '<h5>Current PHP Version : ' . phpversion() . '</h5>';
echo '<h5>L adresse IP de l utilisateur est : ' . $_SERVER['REMOTE_ADDR'] . '</h5>';
echo '<h3>Display the spdo instance value</h3>';
print_r(SPDO::getInstance());
echo '<h6>CONNEXION SUCCESSED</h6>';
?>
<h6>-----------------------------------</h6>
<?php
echo '<h3>User : </h3>';
$_new_user = new User(0, 'developer', 'pwd&&!!', 'Chrif', 'MELLOULI', 'engineer', true, false);
$stm_user = SPDO::getInstance()->query('SELECT id, user_name, password, name, last_name, position, enabled, is_connected  FROM user');
$users = $stm_user->fetchAll();
print_r($users);
echo '<h3>History : </h3>';
$h = new History(0, 0, 0);
print_r($h->getDate()->format('Y-m-d h:m:s'));
echo '<h3>Customer : </h3>';
try {
    $c = new Customer(0, "chrif", "mellouli", "myaddress", "myregion", "80508250", "email@gmail.com", false);
    print_r($c->getDateSubmit()->format('Y-m-d H:i:s'));
} catch (Exception $e) {
    echo '*' . $e->getMessage() . '*';
}
?>
</body>
</html>
