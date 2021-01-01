<?php
require 'models/user.model.php';

/**
 * Interface UserDao
 */
interface UserDao
{
    /**
     * @param int $id
     * @return User
     */
    function findById(int $id):User;

    /**
     * @param string $user_name
     * @return iterable
     */
    function findByUserName(string $user_name):iterable;

    /**
     * @param string $user_name
     * @param string $password
     * @return iterable
     */
    function findByUserNameAndPassword(string $user_name, string $password):iterable;

    /**
     * @param string $name
     * @return iterable
     */
    function findByName(string $name):iterable;

    /**
     * @param string $last_name
     * @return iterable
     */
    function findByLastName(string $last_name):iterable;

    /**
     * @param bool $is_connected
     * @return iterable
     */
    function findByIsConnected(bool $is_connected):iterable;

    /**
     * @param bool $is_enabled
     * @return iterable
     */
    function findByIsEnabled(bool $is_enabled):iterable;

    /**
     * @param int $id_user
     * @return iterable
     */
    function findAllHistories(int $id_user):iterable;

    /**
     * @param int $id_user
     * @return iterable
     */
    function findAllAuthorizations(int $id_user):iterable;
}