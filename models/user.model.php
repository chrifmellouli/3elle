<?php

/**
 * Class User
 */
class User
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var string
     */
    private string $_user_name;
    /**
     * @var string
     */
    private string $_password;
    /**
     * @var string
     */
    private string $_name;
    /**
     * @var string
     */
    private string $_last_name;
    /**
     * @var string
     */
    private string $_position;
    /**
     * @var bool
     */
    private bool $_enabled;
    /**
     * @var bool
     */
    private bool $_is_connected;

    /**
     * User constructor.
     * @param int $_id
     * @param string $_user_name
     * @param string $_password
     * @param string $_name
     * @param string $_last_name
     * @param string $_position
     * @param bool $_enabled
     * @param bool $_is_connected
     * @throws Exception
     */
    public function __construct(int $_id, string $_user_name, string $_password, string $_name, string $_last_name, string $_position, bool $_enabled, bool $_is_connected)
    {
        $this -> setId ( $_id );
        $this -> setUserName ( $_user_name );
        $this -> setPassword ( $_password );
        $this -> setName ( $_name );
        $this -> setLastName ( $_last_name );
        $this -> setPosition ( $_position );
        $this -> setEnabled ( $_enabled );
        $this -> setIsConnected ( $_is_connected );
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this -> _id;
    }

    /**
     * @param int $id
     * @throws Exception
     */
    public function setId(int $id): void
    {
        if (strcmp ( gettype ( $id ), 'integer' ) == 0) {
            $this -> _id = $id;
        } else {
            throw new Exception( 'Unexceped value for this filed' );
        }
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this -> _user_name;
    }

    /**
     * @param string $user_name
     * length : 4 .. 10
     * @throws Exception
     */
    public function setUserName(string $user_name): void
    {
        if ((strcmp ( gettype ( $user_name ), 'string' ) == 0) && (strlen ( $user_name ) >= 4) && (strlen ( $user_name ) <= 10)) {
            $this -> _user_name = $user_name;
        } else {
            throw new Exception( 'Unexceped value for this filed' );
        }
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this -> _password;
    }

    /**
     * @param string $password
     * length : 8 .. 50
     * @throws Exception
     */
    public function setPassword(string $password): void
    {
        if ((strcmp ( gettype ( $password ), 'string' ) == 0) && (strlen ( $password ) >= 8) && (strlen ( $password ) <= 50)) {
            $this -> _password = $password;
        } else {
            throw new Exception( 'Unexceped value for this filed' );
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this -> _name;
    }

    /**
     * @param string $name
     * length : 3 .. 50
     * @throws Exception
     */
    public function setName(string $name): void
    {
        if ((strcmp ( gettype ( $name ), 'string' ) == 0) && (strlen ( $name ) >= 3) && (strlen ( $name ) <= 50)) {
            $this -> _name = $name;
        } else {
            throw new Exception( 'Unexceped value for this filed' );
        }
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this -> _last_name;
    }

    /**
     * @param string $last_name
     * length : 3 .. 50
     * @throws Exception
     */
    public function setLastName(string $last_name): void
    {
        if ((strcmp ( gettype ( $last_name ), 'string' ) == 0) && (strlen ( $last_name ) >= 3) && (strlen ( $last_name ) <= 50)) {
            $this -> _last_name = $last_name;
        } else {
            throw new Exception( 'Unexceped value for this filed' );
        }
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this -> _position;
    }

    /**
     * @param string $position
     * length : 3 .. 50
     * @throws Exception
     */
    public function setPosition(string $position): void
    {
        if ((strcmp ( gettype ( $position ), 'string' ) == 0) && (strlen ( $position ) >= 3) && (strlen ( $position ) <= 50)) {
            $this -> _position = $position;
        } else {
            throw new Exception( 'Unexceped value for this filed' );
        }
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this -> _enabled;
    }

    /**
     * @param bool $enabled
     * @throws Exception
     */
    public function setEnabled(bool $enabled): void
    {
        if (strcmp ( gettype ( $enabled ), 'boolean' ) == 0) {
            $this -> _enabled = $enabled;
        } else {
            throw new Exception( 'Unexceped value for this filed' );
        }
    }

    /**
     * @return bool
     */
    public function isIsConnected(): bool
    {
        return $this -> _is_connected;
    }

    /**
     * @param bool $is_connected
     * @throws Exception
     */
    public function setIsConnected(bool $is_connected): void
    {
        if (strcmp ( gettype ( $is_connected ), 'boolean' ) == 0) {
            $this -> _is_connected = $is_connected;
        } else {
            throw new Exception( 'Unexceped value for this filed' );
        }
    }

}
