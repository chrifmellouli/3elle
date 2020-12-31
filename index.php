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
<h6>
    <?php
    echo 'Current PHP Version : ' . phpversion() . '<br>';
    $_new_user = new User(0, 'developer', 'pwd&&!!', 'Chrif', 'MELLOULI', 'engineer', true, false);
    echo $_new_user->__toString();
    $_new_privilege = new Privilege(0, 'admin');
    echo $_new_privilege->__toString();
    $_new_history = new History(0, 'notification number 0', 0);
    echo $_new_history->__toString();
    $_new_authorization = new Authorization(0, 0, true);
    echo $_new_authorization->__toString();
    foreach (SPDO::getInstance()->query('SELECT * FROM user m') as $membre)
    {
        echo '<pre>', print_r($membre) ,'</pre>';
    }
    print_r(SPDO::getInstance());
    echo '<h3>CONNEXION SUCCESSED</h3>';
    ?>
</h6>
</body>
</html>
