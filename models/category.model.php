<?php


/**
 * Class Category
 */
class Category
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var String
     */
    private string $_code;

    /**
     * Category constructor.
     * @param int $_id
     * @param String $_code
     */
    public function __construct(int $_id, string $_code)
    {
        $this->setId($_id);
        $this->setCode($_code);
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
     * @return String
     */
    public function getCode(): string
    {
        return $this->_code;
    }

    /**
     * @param String $code
     */
    public function setCode(string $code): void
    {
        $this->_code = $code;
    }

}
