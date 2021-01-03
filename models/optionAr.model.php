<?php


/**
 * Class OptionAr
 */
class OptionAr
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var string
     */
    private string $_designation;
    /**
     * @var int
     */
    private int $_id_option;

    /**
     * OptionAr constructor.
     * @param int $_id
     * @param string $_designation
     * @param int $_id_option
     */
    public function __construct(int $_id, string $_designation, int $_id_option)
    {
        $this->_id = $_id;
        $this->_designation = $_designation;
        $this->_id_option = $_id_option;
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
    public function getDesignation(): string
    {
        return $this->_designation;
    }

    /**
     * @param string $designation
     */
    public function setDesignation(string $designation): void
    {
        $this->_designation = $designation;
    }

    /**
     * @return int
     */
    public function getIdOption(): int
    {
        return $this->_id_option;
    }

    /**
     * @param int $id_option
     */
    public function setIdOption(int $id_option): void
    {
        $this->_id_option = $id_option;
    }

}
