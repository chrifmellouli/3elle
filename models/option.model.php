<?php


/**
 * Class Option
 */
class Option
{
    /**
     * @var int
     */
    private int $_id;

    /**
     * Option constructor.
     * @param int $_id
     */
    public function __construct(int $_id)
    {
        $this->_id = $_id;
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

}
