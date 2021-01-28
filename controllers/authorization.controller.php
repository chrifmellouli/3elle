<?php
ini_set ( 'display_errors', 'on' );
include "../models/spdo.model.php";
include "../repositories/authorizationRepo.repositorie.php";
$auth_controller = new AuthorizationRepo();
if ( isset( $_REQUEST[ 'action' ] ) ) {
    $action = $_REQUEST[ 'action' ];
} else {
    $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
}
if ( isset( $action ) ) {
    switch ($action) {
        case "ajout":
            //TODO
            try {
                $auth_controller -> addAuthorization ( null );
            } catch (Exception $e) {
                $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
            }
            break;
        case "delete":
            //TODO
            try {
                $auth_controller -> deleteAuthorization ( 0, 0 );
            } catch (Exception $e) {
                $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
            }
            break;
        case "listAll":
            //TODO
            $authorizations = $auth_controller -> listAllAuth ();
            try {
                $privileges = $auth_controller -> getPrivilegeDaoImpl () -> findAll ();
            } catch (Exception $e) {
                $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
            }
            $serialised_auths = trim ( serialize ( $authorizations) );
            $safe_object = str_replace ( "\0", "~~~~", $serialised_auths );
            $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/access/privileges.php?auths=' . $safe_object );
            break;
        default:
            $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
    }
} else {
    $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
}
