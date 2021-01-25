<?php
ini_set ( 'display_errors', 'on' );
include "../models/spdo.model.php";
include "../repositories/userRepo.repositorie.php";
$user_controller = new UserRepo();
if ( isset( $_REQUEST[ 'action' ] ) ) {
    $action = $_REQUEST[ 'action' ];
} else {
    $user_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
}
if ( isset( $action ) ) {
    switch ($action) {
        case "connexion":
            if ( isset( $_POST[ 'user_name' ] ) && isset( $_POST[ 'password' ] ) ) {
                $user_name = $_POST[ 'user_name' ];
                $password = $_POST[ 'password' ];
            }
            if ( isset( $user_name ) && isset( $password ) ) {
                $user_controller -> connexion ( $_POST[ 'user_name' ], $_POST[ 'password' ] );
            }
            break;
        case "ajout":
            if ( isset( $_POST[ 'user_name' ] ) && isset( $_POST[ 'password' ] ) && isset( $_POST[ 'name' ] ) && isset( $_POST[ 'last_name' ] ) && isset( $_POST[ 'position' ] ) ) {
                $user_name = $_POST[ 'user_name' ];
                $password = $_POST[ 'password' ];
                $name = $_POST[ 'name' ];
                $last_name = $_POST[ 'last_name' ];
                $position = $_POST[ 'position' ];
                $enable = false;
                $is_connected = false;
                try {
                    $user = new User( 0, $user_name, $password, $name, $last_name, $position, $enable, $is_connected );
                } catch (Exception $e) {
                    $user_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
                }
            }
            if ( isset( $user ) ) {
                $user_controller -> addUser ( $user );
            } else {
                $user_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
            }
            break;
        case "edit":
            if ( isset( $_POST[ 'id' ] ) && isset( $_POST[ 'user_name' ] ) && isset( $_POST[ 'password' ] ) && isset( $_POST[ 'name' ] ) && isset( $_POST[ 'last_name' ] ) && isset( $_POST[ 'position' ] ) && isset( $_POST[ 'enabled' ] ) && isset( $_POST[ 'is_connected' ] ) ) {
                $id = $_POST[ 'id' ];
                $user_name = $_POST[ 'user_name' ];
                $password = $_POST[ 'password' ];
                $name = $_POST[ 'name' ];
                $last_name = $_POST[ 'last_name' ];
                $position = $_POST[ 'position' ];
                $enable = $_POST[ 'enabled' ];
                $is_connected = $_POST[ 'is_connected' ];
                try {
                    $user = new User( $id, $user_name, $password, $name, $last_name, $position, $enable, $is_connected );
                } catch (Exception $e) {
                    $user_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
                }
            }
            if ( isset( $user ) ) {
                $user_controller -> editUser ( $user );
            } else {
                $user_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
            }
            break;
        case "delete":
            if ( isset( $_POST[ 'id' ] ) ) {
                $id = $_POST[ 'id' ];
                try {
                    $user_controller -> deleteUser ( $id );
                } catch (Exception $e) {
                    $user_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
                }
            }
            break;
        case "listAll":
            $users = $user_controller -> listAllUsers ();
            $serialised_users = trim ( serialize ( $users) );
            $safe_object = str_replace ( "\0", "~~~~", $serialised_users );
            $user_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/access/users.php?users=' . $safe_object );
            break;
        case "logout":
            if ( isset( $_POST[ 'id' ] ) ) {
                $id = $_POST[ 'id' ];
                if ( (strcmp ( gettype ( $id ), 'integer' ) == 0) && isset( $id ) ) {
                    $id = $_POST[ 'id' ];
                } else {
                    $user_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
                }
                try {
                    $user_controller -> logout ( $id );
                } catch (Exception $e) {
                    $user_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
                }
            }
            break;
        default:
            $user_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
    }
} else {
    $user_controller -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
}
