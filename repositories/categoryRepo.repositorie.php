<?php
require '../daoImpl/CategoryDaoImpl.php';
require 'repo.repositorie.php';

class CategoryRepo extends Repo
{

    protected CategoryDaoImpl $_category_dao_impl;

    public function __construct()
    {
        parent ::__construct ();
        $this -> _category_dao_impl = new CategoryDaoImpl();
    }

    public function listAllCategories(): ?iterable
    {
        try {
            return $this -> _category_dao_impl -> findAll ();
        } catch (Exception $e) {
            $this -> getActionServerSide () -> redirectServerSide ( '/dashbord/500.php' );
        }
    }

}