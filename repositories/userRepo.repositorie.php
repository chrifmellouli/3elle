<?php
require '../daoImpl/userDaoImpl.impl.php';
require '../daoImpl/privilegeDaoImpl.impl.php';
require '../daoImpl/authorizationDaoImpl.impl.php';
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
    protected PrivilegeDaoImpl $_privilege_dao_impl;
    protected AuthorizationDaoImpl $_authorization_dao_impl;

    /**
     * UserRepo constructor.
     */
    public function __construct()
    {
        parent ::__construct ();
        $this -> _user_dao_impl = new UserDaoImpl();
        $this -> _privilege_dao_impl = new PrivilegeDaoImpl();
        $this -> _authorization_dao_impl = new AuthorizationDaoImpl();
    }

    /**
     * @param string $username
     * @param string $password
     * @throws Exception
     */
    public function connexion(string $username, string $password): void
    {
        try {
            $user = $this -> _user_dao_impl -> findByUserName ( $username );
            if ( $user != null ) {
                if ( $user -> isEnabled () ) {
                    $the_connection_requestor = $this -> _user_dao_impl
                        -> findByUserNameAndPassword ( $user -> getUserName (), $password );
                    if ( $the_connection_requestor != null ) {
                        $user -> setIsConnected ( true );
                        $this -> _user_dao_impl -> update ( $user );
                        if ( !isset( $_SESSION ) ) {
                            session_start ();
                        }
                        $_SESSION[ 'user_name' ] = $user -> getUserName ();
                        $_SESSION[ 'password' ] = $user -> getPassword ();
                        $_SESSION[ 'is_connected' ] = $user -> isIsConnected ();
                        $_SESSION[ 'position' ] = $user -> getPosition ();
                        $_SESSION[ 'id' ] = $user -> getId ();
                        $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/index.php' );
                    } else {
                        $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/login.php?err=1' );
                    }
                } else {
                    $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/login.php?err=2' );
                }
            } else {
                $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/login.php?err=3' );
            }
        } catch (Exception $e) {
            $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
        }
    }


    /**
     * @param User $user
     * @throws Exception
     */
    public function addUser(User $user): void
    {
        $last_id = $this -> _user_dao_impl -> save ( $user );
        $array = (array)$this -> _privilege_dao_impl -> findAll ();
        foreach ($array as $value) {
            $this -> _authorization_dao_impl -> save ( new Authorization( $last_id, $value -> getId (), 0 ) );
        }
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
     * @param User $user
     */
    public function editPwdUser(User $user): void
    {
        $this -> _user_dao_impl -> updateWithPwd ( $user );
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
                    $this -> getActionServerSide ()
                        -> redirectServerSide ( '/controllers/user.controller.php?action=listAll' );
                } else {
                    $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
                }
            } else {
                $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
            }
        } catch (Exception $e) {
            $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
        }
    }

    /**
     * @param int $id
     */
    public function logout(int $id)
    {
        if ( strcmp ( gettype ( (int)$id ), 'integer' ) == 0 ) {
            try {
                $user = $this -> _user_dao_impl -> findById ( $id );
                if ( $user != null ) {
                    $user -> setIsConnected ( false );
                    $this -> _user_dao_impl -> update ( $user );
                    session_destroy ();
                    $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/login.php' );
                } else {
                    $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
                }
            } catch (Exception $e) {
                $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
            }
        } else {
            $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
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
                    $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
                }
            } catch (Exception $e) {
                $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
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
            $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
        }
    }

}
