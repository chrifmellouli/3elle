<?php

require "dao/userDao.dao.php";

class UserDaoImpl implements UserDao
{


    /**
     * @param int $id
     * @return User|null
     * @throws Exception
     */
    function findById(int $id): ?User
    {
        $stmt_user = SPDO ::getInstance () -> query ( "SELECT id, user_name, password, name, last_name, position, enabled, is_connected FROM user WHERE id={$id}" ) -> fetchAll ();
        return sizeof ( $stmt_user ) == 0 ? null : new User( (int)$stmt_user[0] ['id'],
            $stmt_user[0] ['user_name'],
            $stmt_user[0] ['password'],
            $stmt_user[0] ['name'],
            $stmt_user[0] ['last_name'],
            $stmt_user[0] ['position'],
            (bool)$stmt_user[0] ['enabled'],
            (bool)$stmt_user[0] ['is_connected'] );
    }

    /**
     * @param string $user_name
     * @return iterable|null
     * @throws Exception
     */
    function findByUserName(string $user_name): ?iterable
    {
        $stmt_user = SPDO ::getInstance () -> query ( "SELECT id, user_name, password, name, last_name, position, enabled, is_connected FROM user WHERE user_name LIKE %{$user_name}%" ) -> fetchAll ();
        return $this -> getUsers ( $stmt_user );
    }

    /**
     * @param string $user_name
     * @param string $password
     * @return iterable|null
     * @throws Exception
     */
    function findByUserNameAndPassword(string $user_name, string $password): ?iterable
    {
        $stmt_user = SPDO ::getInstance () -> query ( "SELECT id, user_name, password, name, last_name, position, enabled, is_connected FROM user WHERE user_name ={$user_name} AND password = {$password}" ) -> fetchAll ();
        return $this -> getUsers ( $stmt_user );
    }

    /**
     * @param string $name
     * @return iterable|null
     * @throws Exception
     */
    function findByName(string $name): ?iterable
    {
        $stmt_user = SPDO ::getInstance () -> query ( "SELECT id, user_name, password, name, last_name, position, enabled, is_connected FROM user WHERE name LIKE %{$name}%" ) -> fetchAll ();
        return $this -> getUsers ( $stmt_user );
    }

    /**
     * @param string $last_name
     * @return iterable|null
     * @throws Exception
     */
    function findByLastName(string $last_name): ?iterable
    {
        $stmt_user = SPDO ::getInstance () -> query ( "SELECT id, user_name, password, name, last_name, position, enabled, is_connected FROM user WHERE last_name LIKE %{$last_name}%" ) -> fetchAll ();
        return $this -> getUsers ( $stmt_user );
    }

    /**
     * @param bool $is_connected
     * @return iterable|null
     * @throws Exception
     */
    function findByIsConnected(bool $is_connected): ?iterable
    {
        $stmt_user = SPDO ::getInstance () -> query ( "SELECT id, user_name, password, name, last_name, position, enabled, is_connected FROM user WHERE is_connected = {$is_connected}" ) -> fetchAll ();
        return $this -> getUsers ( $stmt_user );
    }

    /**
     * @param bool $is_enabled
     * @return iterable|null
     * @throws Exception
     */
    function findByIsEnabled(bool $is_enabled): ?iterable
    {
        $stmt_user = SPDO ::getInstance () -> query ( "SELECT id, user_name, password, name, last_name, position, enabled, is_connected FROM user WHERE enabled = {$is_enabled}" ) -> fetchAll ();
        return $this -> getUsers ( $stmt_user );
    }

    /**
     * @param int $id_user
     * @return iterable|null
     */
    function findAllHistories(int $id_user): ?iterable
    {
        // TODO: Implement findAllHistories() method.
        return null;
    }

    /**
     * @param int $id_user
     * @return iterable|null
     */
    function findAllAuthorizations(int $id_user): ?iterable
    {
        // TODO: Implement findAllAuthorizations() method.
        return null;
    }

    /**
     * @return iterable|null
     * @throws Exception
     */
    function findAll(): ?iterable
    {
        $stmt_user = SPDO ::getInstance () -> query ( 'SELECT id, user_name, password, name, last_name, position, enabled, is_connected FROM user ' ) -> fetchAll ();
        return $this -> getUsers ( $stmt_user );
    }

    /**
     * @param User $user
     * @return int
     */
    function save(User $user): int
    {
        SPDO ::getInstance () -> exec ( "INSERT INTO user(user_name, password, name, last_name, position, enabled, is_connected) VALUES ({$user->getUserName()},{$user->getPassword()},{$user->getName()},{$user->getLastName()},{$user->getPosition()},{$user->isEnabled()},{$user->isIsConnected()})" );
        return 0;
    }

    /**
     * @param User $user
     */
    function update(User $user): void
    {
        // TODO: Implement update() method.
    }

    /**
     * @param int $id
     */
    function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param array $stmt_user
     * @return ArrayObject|null
     * @throws Exception
     */
    private function getUsers(array $stmt_user): ?ArrayObject
    {
        if (sizeof ( $stmt_user ) != 0) {
            $list_user = new ArrayObject();
            foreach ($stmt_user as $value) {
                $user = new User( (int)$value['id'],
                    $value['user_name'],
                    $value['password'],
                    $value['name'],
                    $value['last_name'],
                    $value['position'],
                    (bool)$value['enabled'],
                    (bool)$value['is_connected'] );
                $list_user -> append ( $user );
                unset( $user );
            }
            unset( $value );
            return $list_user;
        } else {
            return null;
        }
    }
}
