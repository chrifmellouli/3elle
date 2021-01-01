<?php


class UserDaoImpl implements UserDao
{

    /**
     * @inheritDoc
     */
    function findById(int $id): User
    {
        // TODO: Implement findById() method.
    }

    /**
     * @inheritDoc
     */
    function findByUserName(string $user_name): iterable
    {
        // TODO: Implement findByUserName() method.
    }

    /**
     * @inheritDoc
     */
    function findByUserNameAndPassword(string $user_name, string $password): iterable
    {
        // TODO: Implement findByUserNameAndPassword() method.
    }

    /**
     * @inheritDoc
     */
    function findByName(string $name): iterable
    {
        // TODO: Implement findByName() method.
    }

    /**
     * @inheritDoc
     */
    function findByLastName(string $last_name): iterable
    {
        // TODO: Implement findByLastName() method.
    }

    /**
     * @inheritDoc
     */
    function findByIsConnected(bool $is_connected): iterable
    {
        // TODO: Implement findByIsConnected() method.
    }

    /**
     * @inheritDoc
     */
    function findByIsEnabled(bool $is_enabled): iterable
    {
        // TODO: Implement findByIsEnabled() method.
    }

    /**
     * @inheritDoc
     */
    function findAllHistories(int $id_user): iterable
    {
        // TODO: Implement findAllHistories() method.
    }

    /**
     * @inheritDoc
     */
    function findAllAuthorizations(int $id_user): iterable
    {
        // TODO: Implement findAllAuthorizations() method.
    }
}
