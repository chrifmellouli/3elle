<?php

require "../dao/userDao.dao.php";

/**
 * Class UserDaoImpl
 */
class UserDaoImpl implements UserDao
{

    /**
     * @param int $id
     * @return User|null
     * @throws Exception
     */
    function findById(int $id): ?User
    {
        $query = "SELECT id, user_name, password, name, last_name, position, enabled, is_connected 
                  FROM user WHERE id={$id}";
        return $this -> getUser ( $query );
    }

    /**
     * @param string $user_name
     * @return iterable|null
     * @throws Exception
     */
    function findByUserName(string $user_name): ?User
    {
        $query = "SELECT id, user_name, password, name, last_name, position, enabled, is_connected 
                  FROM user WHERE user_name = '{$user_name}'";
        return $this -> getUser ( $query );
    }

    /**
     * @param string $user_name
     * @param string $password
     * @return iterable|null
     * @throws Exception
     */
    function findByUserNameAndPassword(string $user_name, string $password): ?User
    {
        $query = "SELECT id, user_name, password, name, last_name, position, enabled, is_connected 
                  FROM user WHERE user_name ='{$user_name}' AND password = md5('{$password}')";
        return $this -> getUser ( $query );
    }

    /**
     * @param string $name
     * @return iterable|null
     * @throws Exception
     */
    function findByName(string $name): ?iterable
    {
        $query = "SELECT id, user_name, password, name, last_name, position, enabled, is_connected 
                  FROM user WHERE name LIKE %'{$name}'%";
        $stmt_user = SPDO ::getInstance () -> query ( $query ) -> fetchAll ();
        return $this -> getUsers ( $stmt_user );
    }

    /**
     * @param string $last_name
     * @return iterable|null
     * @throws Exception
     */
    function findByLastName(string $last_name): ?iterable
    {
        $query = "SELECT id, user_name, password, name, last_name, position, enabled, is_connected 
                  FROM user WHERE last_name LIKE %'{$last_name}'%";
        $stmt_user = SPDO ::getInstance () -> query ( $query ) -> fetchAll ();
        return $this -> getUsers ( $stmt_user );
    }

    /**
     * @param bool $is_connected
     * @return iterable|null
     * @throws Exception
     */
    function findByIsConnected(bool $is_connected): ?iterable
    {
        $query = "SELECT id, user_name, password, name, last_name, position, enabled, is_connected 
                  FROM user WHERE is_connected = {$is_connected}";
        $stmt_user = SPDO ::getInstance () -> query ( $query ) -> fetchAll ();
        return $this -> getUsers ( $stmt_user );
    }

    /**
     * @param bool $is_enabled
     * @return iterable|null
     * @throws Exception
     */
    function findByIsEnabled(bool $is_enabled): ?iterable
    {
        $query = "SELECT id, user_name, password, name, last_name, position, enabled, is_connected 
                  FROM user WHERE enabled = {$is_enabled}";
        $stmt_user = SPDO ::getInstance () -> query ( $query ) -> fetchAll ();
        return $this -> getUsers ( $stmt_user );
    }

    /**
     * @return iterable|null
     * @throws Exception
     */
    function findAll(): ?iterable
    {
        $query = 'SELECT id, user_name, password, name, last_name, position, enabled, is_connected 
                  FROM user ';
        $stmt_user = SPDO ::getInstance () -> query ( $query ) -> fetchAll ();
        return $this -> getUsers ( $stmt_user );
    }

    /**
     * @param User $user
     * @return int
     */
    function save(User $user): int
    {
        /** bool variables witch values are false will be ignored by PHP interpreter
         * when we try to construct query
         * So we should convert bool variable to int to avoid empty string in query*/
        /** @var bool $is_enable */
        $is_enable = (int)$user -> isEnabled ();
        /** @var bool $is_conn */
        $is_conn = (int)$user -> isIsConnected ();
        $query = "INSERT INTO user(user_name, password, name, last_name, position, enabled, is_connected) 
                                VALUES ('{$user -> getUserName ()}' ,
                                        md5('{$user -> getPassword ()}') ,
                                        '{$user -> getName ()}',
                                        '{$user -> getLastName ()}',
                                        '{$user -> getPosition ()}',
                                         {$is_enable},
                                         {$is_conn})";
        return (int)SPDO ::getInstance () -> insert ( $query );
    }

    /**
     * @param User $user
     */
    function update(User $user): void
    {
        /** bool variables witch values are false will be ignored by PHP interpreter
         * when we try to construct query
         * So we should convert bool variable to int to avoid empty string in query*/
        /** @var bool $is_enable */
        $is_enable = (int)$user -> isEnabled ();
        /** @var bool $is_conn */
        $is_conn = (int)$user -> isIsConnected ();
        $query = "UPDATE user 
                  SET    user_name    = '{$user -> getUserName ()}',
                         name         = '{$user -> getName ()}',
                         last_name    = '{$user -> getLastName ()}',
                         position     = '{$user -> getPosition ()}', 
                         enabled      =  {$is_enable},
                         is_connected =  {$is_conn}
                  WHERE id = {$user->getId ()}";
        SPDO ::getInstance () -> updateOrDelete ( $query );
    }

    /**
     * @param User $user
     */
    function updateWithPwd(User $user): void
    {
        $query = "UPDATE user 
                  SET    password     =  md5('{$user -> getPassword ()}')
                  WHERE id = {$user->getId ()}";
        SPDO ::getInstance () -> updateOrDelete ( $query );
    }

    /**
     * @param int $id
     */
    function delete(int $id): void
    {
        $query = "DELETE FROM user where id = {$id}";
        SPDO ::getInstance () -> updateOrDelete ( $query );
    }

    /**
     * @param array $stmt_user
     * @return ArrayObject|null
     * @throws Exception
     */
    private function getUsers(array $stmt_user): ?ArrayObject
    {
        if ( !empty( $stmt_user ) ) {
            $list_user = new ArrayObject();
            foreach ($stmt_user as $value) {
                $user = new User( (int)$value[ 'id' ],
                    $value[ 'user_name' ],
                    $value[ 'password' ],
                    $value[ 'name' ],
                    $value[ 'last_name' ],
                    $value[ 'position' ],
                    (bool)$value[ 'enabled' ],
                    (bool)$value[ 'is_connected' ] );
                $list_user -> append ( $user );
                unset( $user );
            }
            unset( $value );
            return $list_user;
        } else {
            return null;
        }
    }

    /**
     * @param string $query
     * @return User|null
     * @throws Exception
     */
    private function getUser(string $query): ?User
    {
        $stmt_user = SPDO ::getInstance () -> query ( $query );
        if ( $stmt_user != null ) {
            $result = $stmt_user -> fetchAll ();
            $user = null;
            foreach ($result as $array) {
                $user = new User( (int)$array[ 'id' ],
                    $array[ 'user_name' ],
                    $array[ 'password' ],
                    $array[ 'name' ],
                    $array[ 'last_name' ],
                    $array [ 'position' ],
                    (bool)$array[ 'enabled' ],
                    (bool)$array[ 'is_connected' ] );
            }
            return $user;
        } else {
            return null;
        }
    }

}
