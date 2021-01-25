<?php
ini_set ( 'display_errors', 'on' );
include "models/privilege.model.php";
/*include "models/utilities.model.php";
include "models/history.model.php";
include "models/authorization.model.php";*/
include "models/spdo.model.php";
//include "models/customer.model.php";
include "repositories/userRepo.repositorie.php";
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
echo '<h5>Current PHP Version : ' . phpversion () . '</h5>';
echo '<h5>L adresse IP de l utilisateur est : ' . $_SERVER['REMOTE_ADDR'] . '</h5>';
echo '<h3>Display the spdo instance value</h3>';
print_r ( SPDO ::getInstance () );
echo '<h6>CONNEXION SUCCESSED</h6>';
?>
<h6>-----------------------------------</h6>
<?php
function s($u)
{
    if (!empty( $u )) {
        $s = '<br>' . $u -> getId () . '<br>' . $u -> getUserName () . '<br>' . $u -> getPassword () . '<br>' . $u -> getName () . '<br>' . $u -> getLastName () . '<br>' . $u -> getPosition () . '<br>' . $u -> isEnabled () . '<br>' . $u -> isIsConnected () . '<br>';
        print_r ( $s );
    } else {
        echo '<h6>no value</h6>';
    }
}

echo '<h3>User : </h3>';
try {
    //$user = new UserDaoImpl();
    /*    $_new_user1 = new User( 0, 'ch.mel', 'chrifpwd', 'Chrif', 'MELLOULI', 'webmaster', false, false );
        $last1= $user -> save ( $_new_user1);
        $usr1=$user->findById ($last1);
        echo s($usr1);
        $_new_user2 = new User( 0, 'h.chou', 'chenipwd', 'Heni', 'Choura', 'manager', false, false );
        $last2= $user -> save ( $_new_user2);
        $usr2=$user->findById ($last2);
        echo s($usr2);*/
} catch (Exception $e) {
    echo '*' . $e -> getMessage () . '*';
}
$c = new UserRepo();
$c -> connexion ( $_POST['user_name'], $_POST['password'] );
exit;
echo "-----------------";
/*
echo '<h3>History : </h3>';
try {
    $h = new History( 0, 0, 0 );
    print_r ( $h -> getDate () -> format ( 'Y-m-d h:m:s' ) );
} catch (Exception $e) {
    echo '*' . $e -> getMessage () . '*';
}
echo '<h3>Customer : </h3>';
try {
    $c = new Customer( 0, "chrif", "mellouli", "myaddress", "myregion", "80508250", "email@gmail.com", false );
    print_r ( $c -> getDateSubmit () -> format ( 'Y-m-d H:i:s' ) );
} catch (Exception $e) {
    echo '*' . $e -> getMessage () . '*';
}
try {
    $p = new Privilege( 0, "45" );
    $p -> setDesignation ( "lkj" );
} catch (Exception $e) {

}*/
echo '<h3>Year : </h3>';
echo date ( "y" );
echo '<h3>Month : </h3>';
echo date ( "m" );
$p = new PDOStatement();
?>
</body>
</html>
