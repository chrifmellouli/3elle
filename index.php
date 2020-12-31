<?php
ini_set('display_errors', 'on');
include "3ladmin/models/user.model.php";
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
    echo 'Current PHP Version : ' . phpversion();
    ?>
    <br>
    <?php
    $_new_user = new User(0, 'developer', 'pwd&&!!', 'Chrif', 'MELLOULI', 'engineer', true, false);
    echo $_new_user->__toString();
    ?>
</h6>
</body>
</html>
