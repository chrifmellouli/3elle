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
            if ( isset( $_POST[ 'id_user' ] ) && isset( $_POST[ 'id_privilege' ] )
                && isset( $_POST[ 'permission' ] ) ) {
                $id_user = $_POST[ 'id_user' ];
                $id_privilege = $_POST[ 'id_privilege' ];
                $permission = $_POST[ 'permission' ];
                try {
                    $authorization = new Authorization( $id_user, $id_privilege, $permission );
                } catch (Exception $e) {
                    $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
                }
            }
            if ( isset( $authorization ) ) {
                try {
                    $auth_controller -> addAuthorization ( $authorization );
                } catch (Exception $e) {
                    $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
                }
            }
            break;
        case "delete":
            if ( isset( $_POST[ 'id_user' ] ) && isset( $_POST[ 'id_privilege' ] ) ) {
                $id_user = $_POST[ 'id_user' ];
                $id_privilege = $_POST[ 'id_privilege' ];
                try {
                    $auth_controller -> deleteAuthorization ( $id_user, $id_privilege );
                } catch (Exception $e) {
                    $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
                }
            } else {
                $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
            }
            break;
        case "listAll":
            $authorizations = $auth_controller -> listAllAuth ();
            try {
                $users = $auth_controller -> getUserDaoImpl () -> findAll ();
            } catch (Exception $e) {
                $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
            }
            try {
                $privileges = $auth_controller -> getPrivilegeDaoImpl () -> findAll ();
            } catch (Exception $e) {
                $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
            }
            include "../dashbord/access/privileges.php";
            break;
        default:
            $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
    }
} else {
    $auth_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
}
