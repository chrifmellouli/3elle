<?php


/**
 * Class Customer
 */
class Customer
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
     * @var string
     */
    private string $_input_method;
    /**
     * @var string
     */
    private string $_date_submit;

    /**
     * Customer constructor.
     * @param int $_id
     * @param string $_name
     * @param string $_address
     * @param string $_region
     * @param string $_phone
     * @param string $_email
     * @param string $_input_method
     */
    public function __construct(int $_id, string $_name, string $_address, string $_region, string $_phone, string $_email, string $_input_method)
    {
        $this->setId($_id);
        $this->setName($_name);
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
    public function getInputMethod(): string
    {
        return $this->_input_method;
    }

    /**
     * @param string $input_method
     */
    public function setInputMethod(string $input_method): void
    {
        $this->_input_method = $input_method;
    }

    /**
     * @return string
     */
    public function getDateSubmit(): string
    {
        return $this->_date_submit;
    }

    /**
     * @param string $date_submit
     */
    public function setDateSubmit(string $date_submit): void
    {
        $this->_date_submit = $date_submit;
    }

}
