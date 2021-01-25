<?php
require "../models/user.model.php";

/**
 * Interface UserDao
 */
interface UserDao
{


    /**
     * @param int $id
     * @return User|null
     */
    function findById(int $id): ?User;

    /**
     * @param string $user_name
     * @return iterable|null
     */
    function findByUserName(string $user_name): ?User;

    /**
     * @param string $user_name
     * @param string $password
     * @return iterable|null
     */
    function findByUserNameAndPassword(string $user_name, string $password): ?User;

    /**
     * @param string $name
     * @return iterable|null
     */
    function findByName(string $name): ?iterable;

    /**
     * @param string $last_name
     * @return iterable|null
     */
    function findByLastName(string $last_name): ?iterable;

    /**
     * @param bool $is_connected
     * @return iterable|null
     */
    function findByIsConnected(bool $is_connected): ?iterable;

    /**
     * @param bool $is_enabled
     * @return iterable|null
     */
    function findByIsEnabled(bool $is_enabled): ?iterable;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param User $user
     * @return int last inserted id
     */
    function save(User $user): int;

    /**
     * @param User $user
     */
    function update(User $user): void;

    /**
     * @param int $id
     */
    function delete(int $id):void;
}
