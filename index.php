<?php
ini_set('display_errors', 'on');
include "models/Utilities.model.php";
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
try {
    $_new_user = new User(0, 'developer', 'pwd&&8!!', 'Chrif', 'MELLOULI', 'engineer', true, false);
} catch (Exception $e) {
    echo '*' . $e->getMessage() . '*';
}
$stm_user = SPDO::getInstance()->query('SELECT id, user_name, password, name, last_name, position, enabled, is_connected  FROM user');
$users = $stm_user->fetchAll();
print_r($users);
echo '<h3>History : </h3>';
try {
    $h = new History(0, 0, 0);
    print_r($h->getDate()->format('Y-m-d h:m:s'));
} catch (Exception $e) {
    echo '*' . $e->getMessage() . '*';
}
echo '<h3>Customer : </h3>';
try {
    $c = new Customer(0, "chrif", "mellouli", "myaddress", "myregion", "80508250", "email@gmail.com", false);
    print_r($c->getDateSubmit()->format('Y-m-d H:i:s'));
} catch (Exception $e) {
    echo '*' . $e->getMessage() . '*';
}
try {
    $p = new Privilege(0, "45");
    $p->setDesignation("lkj");
} catch (Exception $e) {

}
echo '<h3>Year : </h3>';
echo date("y");
echo '<h3>Month : </h3>';
echo date("m");
?>
</body>
</html>
