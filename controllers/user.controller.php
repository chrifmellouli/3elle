<?php
if ( !isset( $_SESSION ) ) {
    session_start ();
}
include "../models/spdo.model.php";
include "../repositories/userRepo.repositorie.php";
$user_controller = new UserRepo();
const ERROR_500 = '/dashbord/500.php';
if ( isset( $_REQUEST[ 'action' ] ) ) {
    $action = $_REQUEST[ 'action' ];
} else {
    $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 );
}
if ( isset( $action ) ) {
    switch ($action) {
        case "connexion":
            if ( isset( $_POST[ 'user_name' ] ) && isset( $_POST[ 'password' ] ) ) {
                $user_name = $_POST[ 'user_name' ];
                $password = $_POST[ 'password' ];
            }
            if ( isset( $user_name ) && isset( $password ) ) {
                try {
                    $user_controller -> connexion ( $_POST[ 'user_name' ], $_POST[ 'password' ] );
                } catch (Exception $e) {
                    $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 );
                }
            }
            break;
        case "add":
            if ( isset( $_POST[ 'user_name' ] ) && isset( $_POST[ 'password' ] ) && isset( $_POST[ 'name' ] )
                && isset( $_POST[ 'last_name' ] ) && isset( $_POST[ 'position' ] ) ) {
                $user_name = $_POST[ 'user_name' ];
                $password = $_POST[ 'password' ];
                $name = $_POST[ 'name' ];
                $last_name = $_POST[ 'last_name' ];
                $position = $_POST[ 'position' ];
                $enable = (bool)$_POST[ 'enable' ];
                $is_connected = false;
                try {
                    $user = new User( 0, $user_name, $password, $name, $last_name,
                        $position, $enable, $is_connected );
                } catch (Exception $e) {
                    $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 );
                }
            }
            if ( isset( $user ) ) {
                try {
                    $user_controller -> addUser ( $user );
                } catch (Exception $e) {
                    $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 );
                }
            } else {
                $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 );
            }
            break;
        case "edit":
            if ( isset( $_POST[ 'id' ] ) && isset( $_POST[ 'user_name' ] ) && isset( $_POST[ 'name' ] )
                && isset( $_POST[ 'last_name' ] ) && isset( $_POST[ 'position' ] )
                && isset( $_POST[ 'enable' ] ) && isset( $_POST[ 'is_connected' ] ) ) {
                $id = (int)$_POST[ 'id' ];
                $user_name = $_POST[ 'user_name' ];
                $name = $_POST[ 'name' ];
                $last_name = $_POST[ 'last_name' ];
                $position = $_POST[ 'position' ];
                if ( $_POST[ 'enable' ] != '1' ) {
                    $enable = false;
                    $is_connected = false;
                } else {
                    $enable = true;
                    if ( $_POST[ 'is_connected' ] != '1' ) {
                        $is_connected = false;
                    } else {
                        $is_connected = true;
                    }
                }
                try {
                    $user = new User( $id, $user_name, "noeditpwd", $name,
                        $last_name, $position, $enable, $is_connected );
                } catch (Exception $e) {
                    $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 . '?er=1e' );
                }
            }
            if ( isset( $user ) ) {
                $user_controller -> editUser ( $user );
            } else {
                $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 . '?er=2e' );
            }
            break;
        case "edit_pwd":
            if ( isset( $_POST[ 'id' ] ) && isset( $_POST[ 'password' ] ) ) {
                $id = (int)$_POST[ 'id' ];
                $password = $_POST[ 'password' ];
                try {
                    $user = new User( $id, "noedituser", $password, "noeditname",
                        "noeditlastname", "noeditposition", false, false );
                } catch (Exception $e) {
                    $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 . '?er=1e' );
                }
            }
            if ( isset( $user ) ) {
                $user_controller -> editPwdUser ( $user );
            } else {
                $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 . '?er=2e' );
            }
            break;
        case
        "delete":
            if ( isset( $_POST[ 'id' ] ) ) {
                $id = $_POST[ 'id' ];
                try {
                    $user_controller -> deleteUser ( $id );
                } catch (Exception $e) {
                    $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 );
                }
            }
            break;
        case "listAll":
            $users = $user_controller -> listAllUsers ();
            include "../dashbord/access/users.php";
            break;
        case "logout":
            if ( isset( $_REQUEST[ 'id' ] ) ) {
                if ( is_numeric ( $_REQUEST[ 'id' ] ) ) {
                    $id = (int)$_REQUEST[ 'id' ];
                } else {
                    $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 );
                }
                if ( isset( $id ) && (strcmp ( gettype ( $id ), 'integer' ) == 0) ) {
                    $id = $_REQUEST[ 'id' ];
                } else {
                    $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 );
                }
                if ( isset( $id ) ) {
                    try {
                        $user_controller -> logout ( $id );
                    } catch (Exception $e) {
                        $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 );
                    }
                }
            }
            break;
        default:
            $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 . '?er=14' );
    }
} else {
    $user_controller -> getActionServerSide () -> redirectServerSide ( ERROR_500 );
}
