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
     * @throws Exception
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

}
