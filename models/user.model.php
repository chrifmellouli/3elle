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
     */
    public function __construct(int $_id, string $_user_name, string $_password, string $_name, string $_last_name, string $_position, bool $_enabled, bool $_is_connected)
    {
        $this->setId($_id);
        $this->setUserName($_user_name);
        $this->setPassword($_password);
        $this->setName($_name);
        $this->setLastName($_last_name);
        $this->setPosition($_position);
        $this->setEnabled($_enabled);
        $this->setIsConnected($_is_connected);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->_id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->_id = $id;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->_user_name;
    }

    /**
     * @param string $user_name
     */
    public function setUserName(string $user_name): void
    {
        $this->_user_name = $user_name;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->_password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->_password = $password;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->_last_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName(string $last_name): void
    {
        $this->_last_name = $last_name;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->_position;
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->_position = $position;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->_enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled): void
    {
        $this->_enabled = $enabled;
    }

    /**
     * @return bool
     */
    public function isIsConnected(): bool
    {
        return $this->_is_connected;
    }

    /**
     * @param bool $is_connected
     */
    public function setIsConnected(bool $is_connected): void
    {
        $this->_is_connected = $is_connected;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "<br>------<br>User<br> id : " . $this->getId() . "<br> user name : " . $this->getUserName() . "<br> password : " . "à/&=)à" . $this->getPassword()[strlen($this->getPassword()) - 1] . "&/&/é*" . "<br> name : " . $this->getName() . "<br> last name : " . $this->getLastName() . "<br> position : " . $this->getPosition() . "<br> enable : " . $this->isEnabled() . "<br> is connected : " . $this->isIsConnected() . "<br>------<br>";
    }


}
