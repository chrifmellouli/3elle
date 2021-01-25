<?php
require '../daoImpl/userDaoImpl.impl.php';
require 'repo.repositorie.php';


/**
 * Class UserRepo
 */
class UserRepo extends Repo
{

    /**
     * @var UserDaoImpl
     */
    protected UserDaoImpl $_user_dao_impl;


    /**
     * UserRepo constructor.
     */
    public function __construct()
    {
        parent ::__construct ();
        $this -> _user_dao_impl = new UserDaoImpl();
    }

    /**
     * @param string $username
     * @param string $password
     */
    public function connexion(string $username, string $password): void
    {
        try {
            $user = $this -> _user_dao_impl -> findByUserName ( $username );
            if ( $user != null ) {
                if ( $user -> isEnabled () ) {
                    if ( $user -> getPassword () == $password ) {
                        $the_connection_requestor = $this -> _user_dao_impl -> findByUserNameAndPassword ( $user -> getUserName (), $password );
                    } else {
                        $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/login.php?err=1' );
                    }
                    if ( isset( $the_connection_requestor ) && ($the_connection_requestor != null) ) {
                        $user -> setIsConnected ( true );
                        $this -> _user_dao_impl -> update ( $user );
                        $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/index.php' );
                    } else {
                        $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/login.php?err=1' );
                    }
                } else {
                    $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/login.php?err=1' );
                }
            } else {
                $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/login.php?err=1' );
            }
        } catch (Exception $e) {
            $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
        }
    }


    /**
     * @param User $user
     */
    public function addUser(User $user): void
    {
        $this -> _user_dao_impl -> save ( $user );
        $this -> getActionServerSide () -> redirectServerSide ( '/controllers/user.controller.php?action=listAll' );
    }


    /**
     * @param User $user
     */
    public function editUser(User $user): void
    {
        $this -> _user_dao_impl -> update ( $user );
        $this -> getActionServerSide () -> redirectServerSide ( '/controllers/user.controller.php?action=listAll' );
    }

    /**
     * @param int $id
     */
    public function deleteUser(int $id): void
    {
        try {
            if ( strcmp ( gettype ( $id ), 'integer' ) == 0 ) {
                $user = $this -> _user_dao_impl -> findById ( $id );
                if ( $user != null ) {
                    $this -> _user_dao_impl -> delete ( $id );
                    $this -> getActionServerSide () -> redirectServerSide ( '/controllers/user.controller.php?action=listAll' );
                } else {
                    $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
                }
            } else {
                $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
            }
        } catch (Exception $e) {
            $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
        }
    }

    /**
     * @param int $id
     */
    public function logout(int $id)
    {
        if ( strcmp ( gettype ( $id ), 'integer' ) == 0 ) {
            try {
                $user = $this -> _user_dao_impl -> findById ( $id );
                if ( $user != null ) {
                    $user -> setIsConnected ( false );
                    $this -> _user_dao_impl -> update ( $user );
                    $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/access/users.php' );
                } else {
                    $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
                }
            } catch (Exception $e) {
                $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
            }
        }
    }

    /**
     * @param int $id
     */
    public function disableUser(int $id)
    {
        if ( strcmp ( gettype ( $id ), 'integer' ) == 0 ) {
            try {
                $user = $this -> _user_dao_impl -> findById ( $id );
                if ( $user != null ) {
                    $user -> setEnabled ( false );
                    $this -> _user_dao_impl -> update ( $user );
                    $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/access/users.php' );
                } else {
                    $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
                }
            } catch (Exception $e) {
                $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
            }
        }
    }

    /**
     * @return iterable|null
     */
    public function listAllUsers(): ?iterable
    {
        try {
            return $this -> _user_dao_impl -> findAll ();

        } catch (Exception $e) {
            $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.html' );
            return null;
        }
    }

}
