<?php
ini_set('display_errors', 'on');
include "models/Utilities.model.php";
include "models/privilege.model.php";
include "models/history.model.php";
include "models/authorization.model.php";
include "models/spdo.model.php";
include "models/customer.model.php";
include "daoImpl/UserDaoImpl.impl.php"
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
function s($u)
{
    if (!empty($u)) {
        $s = $u->getId() . '<br>' . $u->getUserName() . '<br>' . $u->getPassword() . '<br>' . $u->getName() . '<br>' . $u->getLastName() . '<br>' . $u->getPosition() . '<br>' . $u->isEnabled() . '<br>' . $u->isIsConnected() . '<br>';
        print_r($s);
    } else {
        echo 'no value<br>';
    }
}

echo '<h3>User : </h3>';
try {
    $_new_user = new User(0, 'developer', 'pwd&&8!!', 'Chrif', 'MELLOULI', 'engineer', true, false);
    $user1 = new UserDaoImpl();
    print_r($user1->save($_new_user));
} catch (Exception $e) {
    echo '*' . $e->getMessage() . '*';
}
$user = new UserDaoImpl();
try {
    $u = $user->findById(1);
    s($u);
} catch (Exception $e) {
    echo 'exception';
}
try {
    $u = $user->findById(3);
    s($u);
} catch (Exception $e) {
    echo 'exception';
}

try {
    $u = $user->findById(4);
    s($u);
} catch (Exception $e) {
    echo 'exception';
}

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
$p = new PDOStatement();
?>
</body>
</html>
