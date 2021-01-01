<?php

require 'models/user.model.php';
require 'daoImpl/UserDaoImpl.php';

/**
 * Class UserController
 */
class UserController
{
    /**
     * @var UserDaoImpl
     */
    protected UserDaoImpl $_user_dao_impl;

    /**
     * UserController constructor.
     * @param UserDaoImpl $_user_dao_impl
     */
    public function __construct(UserDaoImpl $_user_dao_impl)
    {
        $this->_user_dao_impl = $_user_dao_impl;
    }

}
