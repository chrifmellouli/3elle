<?php


/**
 * Class BlackList
 */
class BlackList
{
    /**
     * @var string
     */
    private string $_phone;

    /**
     * BlackList constructor.
     * @param string $_phone
     */
    public function __construct(string $_phone)
    {
        $this->setPhone($_phone);
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

}
