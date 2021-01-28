<?php
$url = "/dashbord/login.php";
if ( !isset( $_SESSION[ 'user_name' ] ) || !isset( $_SESSION[ 'password' ] )
    || !isset( $_SESSION[ 'position' ] ) || !isset( $_SESSION[ 'id' ] )
    || !isset( $_SESSION[ 'is_connected' ] ) || !isset( $_SESSION[ 'position' ] )
    || ($_SESSION[ 'is_connected' ] != '1') ) {
    header ( 'Location: ' . $url );
    exit();
}