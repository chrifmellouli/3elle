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
     * @throws Exception
     * @throws Exception
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
     * @throws Exception
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
    public function getValue(): string
    {
        return $this->_value;
    }

    /**
     * @param string $value
     * @throws Exception
     * @throws Exception
     */
    public function setValue(string $value): void
    {
        if ((strcmp(gettype($value), 'string') == 0) && (strlen($value) >= 1) && (strlen($value) <= 50)) {
            $this->_value = $value;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

    /**
     * @return int
     */
    public function getIdOptionValue(): int
    {
        return $this->_id_option_value;
    }

    /**
     * @param int $id_option_value
     * @throws Exception
     * @throws Exception
     */
    public function setIdOptionValue(int $id_option_value): void
    {
        if (strcmp(gettype($id_option_value), 'integer') == 0) {
            $this->_id_option_value = $id_option_value;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
