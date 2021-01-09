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
     * @throws Exception
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
        $this->setPassword($_password);
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
     * @throws Exception
     */
    public function setId(int $id): void
    {
        if (strcmp(gettype($id), 'integer') == 0) {
            $this->_id = $id;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * length : 3 .. 50
     * @throws Exception
     */
    public function setName(string $name): void
    {
        if ((strcmp(gettype($name), 'string') == 0) && (strlen($name) >= 3) && (strlen($name) <= 50)) {
            $this->_name = $name;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * length : 3 .. 50
     * @throws Exception
     */
    public function setLastName(string $last_name): void
    {
        if ((strcmp(gettype($last_name), 'string') == 0) && (strlen($last_name) >= 3) && (strlen($last_name) <= 50)) {
            $this->_last_name = $last_name;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * length = 8 and is numeric
     * @throws Exception
     */
    public function setPhone(string $phone): void
    {
        if ((strcmp(gettype($phone), 'string') == 0) && (strlen($phone) == 8) && is_numeric($phone)) {
            $this->_phone = $phone;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * length : 3 .. 254
     * @throws Exception
     */
    public function setAddress(string $address): void
    {
        if ((strcmp(gettype($address), 'string') == 0) && (strlen($address) >= 3) && (strlen($address) <= 254)) {
            $this->_address = $address;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * length : 1 .. 15
     * @throws Exception
     */
    public function setRegion(string $region): void
    {
        if ((strcmp(gettype($region), 'string') == 0) && (strlen($region) >= 1) && (strlen($region) <= 15)) {
            $this->_region = $region;
        } else {
            throw new Exception('Unexceped value for this field');
        }
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
     * length : 10 .. 50
     * @throws Exception
     */
    public function setEmail(string $email): void
    {
        if ((strcmp(gettype($email), 'string') == 0) && (strlen($email) >= 10) && (strlen($email) <= 50)) {
            $this->_email = $email;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * length < 1
     * @throws Exception
     */
    public function setNote(string $note): void
    {
        if ((strcmp(gettype($note), 'string') == 0) && (strlen($note) >= 1)) {
            $this->_note = $note;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * length : 4 .. 10
     * @throws Exception
     */
    public function setUserName(string $user_name): void
    {
        if ((strcmp(gettype($user_name), 'string') == 0) && (strlen($user_name) >= 4) && (strlen($user_name) <= 10)) {
            $this->_user_name = $user_name;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * length : 8 .. 20
     * @throws Exception
     */
    public function setPassword(string $password): void
    {
        if ((strcmp(gettype($password), 'string') == 0) && (strlen($password) >= 8) && (strlen($password) <= 20)) {
            $this->_password = $password;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * @throws Exception
     */
    public function setConn(bool $conn): void
    {
        if (strcmp(gettype($conn), 'boolean') == 0) {
            $this->_conn = $conn;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
