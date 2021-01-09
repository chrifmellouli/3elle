<?php

/**
 * Class Customer
 */
class Customer extends Utilities
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
    private string $_address;
    /**
     * @var string
     */
    private string $_region;
    /**
     * @var string
     */
    private string $_phone;
    /**
     * @var string
     */
    private string $_email;
    /**
     * @var bool
     */
    private bool $_input_method;
    /**
     * @var DateTime
     */
    private DateTime $_date_submit;

    /**
     * Customer constructor.
     * @param int $_id
     * @param string $_name
     * @param string $_last_name
     * @param string $_address
     * @param string $_region
     * @param string $_phone
     * @param string $_email
     * @param bool $_input_method
     * @throws Exception
     */
    public function __construct(int $_id, string $_name, string $_last_name, string $_address, string $_region, string $_phone, string $_email, bool $_input_method)
    {
        parent::__construct();
        $this->setId($_id);
        $this->setName($_name);
        $this->setLastName($_last_name);
        $this->setAddress($_address);
        $this->setRegion($_region);
        $this->setPhone($_phone);
        $this->setEmail($_email);
        $this->setInputMethod($_input_method);
        $this->setDateSubmit(new DateTime('now'));
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
    public function getAddress(): string
    {
        return $this->_address;
    }

    /**
     * @param string $address
     * length 3 .. 254
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
     * length : 1 ..15
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
     * @return bool
     */
    public function isInputMethod(): bool
    {
        return $this->_input_method;
    }

    /**
     * @param bool $input_method
     * @throws Exception
     */
    public function setInputMethod(bool $input_method): void
    {
        if (strcmp(gettype($input_method), 'boolean') == 0) {
            $this->_input_method = $input_method;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

    /**
     * @return DateTime
     */
    public function getDateSubmit(): DateTime
    {
        return $this->_date_submit;
    }

    /**
     * @param DateTime $date_submit
     * This is an auto generated field by the constructor at the moment of the customer's creation
     * @throws Exception
     */
    private function setDateSubmit(DateTime $date_submit): void
    {
        if ($this->validateDate($date_submit->format('Y-m-d H:i:s'))) {
            $this->_date_submit = $date_submit;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
