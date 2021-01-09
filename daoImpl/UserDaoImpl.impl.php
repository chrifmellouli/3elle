<?php


class UserDaoImpl implements UserDao
{


    /**
     * @param int $id
     * @return User|null
     */
    function findById(int $id): ?User
    {
        // TODO: Implement findById() method.
    }

    /**
     * @param string $user_name
     * @return iterable|null
     */
    function findByUserName(string $user_name): ?iterable
    {
        // TODO: Implement findByUserName() method.
    }

    /**
     * @param string $user_name
     * @param string $password
     * @return iterable|null
     */
    function findByUserNameAndPassword(string $user_name, string $password): ?iterable
    {
        // TODO: Implement findByUserNameAndPassword() method.
    }

    /**
     * @param string $name
     * @return iterable|null
     */
    function findByName(string $name): ?iterable
    {
        // TODO: Implement findByName() method.
    }

    /**
     * @param string $last_name
     * @return iterable|null
     */
    function findByLastName(string $last_name): ?iterable
    {
        // TODO: Implement findByLastName() method.
    }

    /**
     * @param bool $is_connected
     * @return iterable|null
     */
    function findByIsConnected(bool $is_connected): ?iterable
    {
        // TODO: Implement findByIsConnected() method.
    }

    /**
     * @param bool $is_enabled
     * @return iterable|null
     */
    function findByIsEnabled(bool $is_enabled): ?iterable
    {
        // TODO: Implement findByIsEnabled() method.
    }

    /**
     * @param int $id_user
     * @return iterable|null
     */
    function findAllHistories(int $id_user): ?iterable
    {
        // TODO: Implement findAllHistories() method.
    }

    /**
     * @param int $id_user
     * @return iterable|null
     */
    function findAllAuthorizations(int $id_user): ?iterable
    {
        // TODO: Implement findAllAuthorizations() method.
    }

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable
    {
        // TODO: Implement findAll() method.
    }

    /**
     * @param User $user
     * @return int
     */
    function save(User $user): int
    {
        // TODO: Implement save() method.
    }

    /**
     * @param User $user
     */
    function update(User $user): void
    {
        // TODO: Implement update() method.
    }

}
