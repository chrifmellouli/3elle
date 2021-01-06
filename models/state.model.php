<?php


/**
 * Class State
 */
class State
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var string
     */
    private string $_description;

    /**
     * State constructor.
     * @param int $_id
     * @param string $_description
     */
    public function __construct(int $_id, string $_description)
    {
        $this->setId($_id);
        $this->setDescription($_description);
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
    public function getDescription(): string
    {
        return $this->_description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->_description = $description;
    }

}
