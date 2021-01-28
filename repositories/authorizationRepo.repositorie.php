<?php

require '../daoImpl/userDaoImpl.impl.php';
require '../daoImpl/privilegeDaoImpl.impl.php';
require '../daoImpl/authorizationDaoImpl.impl.php';
require 'repo.repositorie.php';

/**
 * Class AuthorizationRepo
 */
class AuthorizationRepo extends Repo
{

    /**
     * @var AuthorizationDaoImpl
     */
    protected AuthorizationDaoImpl $_authorization_dao_impl;

    /**
     * @return PrivilegeDaoImpl
     */
    public function getPrivilegeDaoImpl(): PrivilegeDaoImpl
    {
        return $this -> _privilege_dao_impl;
    }

    /**
     * @return UserDaoImpl
     */
    public function getUserDaoImpl(): UserDaoImpl
    {
        return $this -> _user_dao_impl;
    }
    /**
     * @var PrivilegeDaoImpl
     */
    protected PrivilegeDaoImpl $_privilege_dao_impl;
    /**
     * @var UserDaoImpl
     */
    protected UserDaoImpl $_user_dao_impl;

    /**
     * AuthorizationRepo constructor.
     */
    public function __construct()
    {
        parent ::__construct ();
        $this -> _authorization_dao_impl = new AuthorizationDaoImpl();
        $this -> _privilege_dao_impl = new PrivilegeDaoImpl();
        $this -> _user_dao_impl = new UserDaoImpl();
    }
    public function listAllAuth(): ?iterable
    {
        try {
            return $this -> _authorization_dao_impl -> findAll ();

        } catch (Exception $e) {
            $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
            return null;
        }
    }
    /**
     * @param Authorization $authorization
     */
    public function addAuthorization(Authorization $authorization): void
    {
        $this -> _authorization_dao_impl -> save ( $authorization );
        $this -> getActionServerSide () -> redirectServerSide ( '/controllers/privileges.controller.php?action=listAll' );
    }

    /**
     * @param int $id_user
     * @param int $id_privilege
     */
    public function deleteAuthorization(int $id_user, int $id_privilege): void
    {
        try {
            if ( (strcmp ( gettype ( $id_user ), 'integer' ) == 0) && (strcmp ( gettype ( $id_privilege ), 'integer' ) == 0) ) {
                $user = $this -> _user_dao_impl -> findById ( $id_user );
                $privilege = $this -> _privilege_dao_impl -> findById ( $id_privilege );
                if ( ($user != null) && ($privilege != null) ) {
                    $this -> _authorization_dao_impl -> delete ( $id_user, $id_privilege );
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

}
