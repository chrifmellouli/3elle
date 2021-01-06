<?php


/**
 * Class OptionValueAr
 */
class OptionValueAr
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var string
     */
    private string $_value;
    /**
     * @var int
     */
    private int $_id_option_value;

    /**
     * OptionValueAr constructor.
     * @param int $_id
     * @param string $_value
     * @param int $_id_option_value
     */
    public function __construct(int $_id, string $_value, int $_id_option_value)
    {
        $this->setId($_id);
        $this->setValue($_value);
        $this->setIdOptionValue($_id_option_value);
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
    public function getValue(): string
    {
        return $this->_value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->_value = $value;
    }

    /**
     * @return int
     */
    public function getIdOptionValue(): int
    {
        return $this->_id_option_value;
    }

    /**
     * @param int $id_option
     */
    public function setIdOptionValue(int $id_option): void
    {
        $this->_id_option_value = $id_option;
    }

}
