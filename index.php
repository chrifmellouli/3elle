<?php
ini_set('display_errors', 'on');
include "models/privilege.model.php";
include "models/user.model.php";
include "models/history.model.php";
include "models/authorization.model.php";
include "models/spdo.model.php";
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
?>
<h6>-----------------------------------</h6>
<?php

$_new_user = new User(0, 'developer', 'pwd&&!!', 'Chrif', 'MELLOULI', 'engineer', true, false);
echo "<h3>Display the user database's table</h3>";
$stm_user = SPDO::getInstance()->query('SELECT id, user_name, password, name, last_name, position, enabled, is_connected  FROM user');
$users = $stm_user->fetchAll();
print_r($users);

$_new_privilege = new Privilege(0, 'admin');

$_new_history = new History(0, 'notification number 0', 0);

$_new_authorization = new Authorization(0, 0, true);

echo '<h3>Display the spdo instance value</h3>';
print_r(SPDO::getInstance());
echo '<h3>CONNEXION SUCCESSED</h3>';

?>
</body>
</html>
