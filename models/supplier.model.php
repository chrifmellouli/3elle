<?php


/**
 * Class Supplier
 */
class Supplier
{
    /**
     * @var int
     */
    private int $_id;
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
    private string $_phone;
    /**
     * @var string
     */
    private string $_address;
    /**
     * @var string
     */
    private string $_region;
    /**
     * @var string
     */
    private string $_email;
    /**
     * @var string
     */
    private string $_note;
    /**
     * @var string
     */
    private string $_user_name;
    /**
     * @var string
     */
    private string $_password;
    /**
     * @var bool
     */
    private bool $_conn;

    /**
     * Supplier constructor.
     * @param int $_id
     * @param string $_name
     * @param string $_last_name
     * @param string $_phone
     * @param string $_address
     * @param string $_region
     * @param string $_email
     * @param string $_note
     * @param string $_user_name
     * @param string $_password
     * @param bool $_conn
     */
    public function __construct(int $_id, string $_name, string $_last_name, string $_phone, string $_address, string $_region, string $_email, string $_note, string $_user_name, string $_password, bool $_conn)
    {
        $this->setId($_id);
        $this->setName($_name);
        $this->setLastName($_last_name);
        $this->setPhone($_phone);
        $this->setAddress($_address);
        $this->setRegion($_region);
        $this->setEmail($_email);
        $this->setNote($_note);
        $this->setUserName($_user_name);
        $this->setPassword($_phone);
        $this->setConn($_conn);
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
    public function getPhone(): string
    {
        return $this->_phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->_phone = $phone;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->_address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->_address = $address;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->_region;
    }

    /**
     * @param string $region
     */
    public function setRegion(string $region): void
    {
        $this->_region = $region;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->_email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->_email = $email;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->_note;
    }

    /**
     * @param string $note
     */
    public function setNote(string $note): void
    {
        $this->_note = $note;
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
     * @return bool
     */
    public function isConn(): bool
    {
        return $this->_conn;
    }

    /**
     * @param bool $conn
     */
    public function setConn(bool $conn): void
    {
        $this->_conn = $conn;
    }

}
