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
     * @throws Exception
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
    public function getDescription(): string
    {
        return $this->_description;
    }

    /**
     * @param string $description
     * length : 3 .. 15
     * @throws Exception
     */
    public function setDescription(string $description): void
    {
        if ((strcmp(gettype($description), 'string') == 0) && (strlen($description) >= 3) && (strlen($description) <= 15)) {
            $this->_description = $description;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
