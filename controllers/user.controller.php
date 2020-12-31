<?php

require 'models/user.model.php';
class UserController
{
    protected User $_user;

    /**
     * UserController constructor.
     * @param User $_user
     */
    public function __construct(User $_user)
    {
        $this->_user = $_user;
    }

}