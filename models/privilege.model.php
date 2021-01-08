<?php


/**
 * Class Privilege
 */
class Privilege
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
     * Privilege constructor.
     * @param int $_id
     * @param string $_designation
     * @throws Exception
     * @throws Exception
     */
    public function __construct(int $_id, string $_designation)
    {
        $this->setId($_id);
        $this->setDesignation($_designation);
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
     * @return String
     */
    public function getDesignation(): string
    {
        return $this->_designation;
    }

    /**
     * @param String $designation
     * @throws Exception
     * @throws Exception
     */
    public function setDesignation(string $designation): void
    {
        if ((strcmp(gettype($designation), 'string') == 0) && (strlen($designation) >= 1) && (strlen($designation) <= 50)) {
            $this->_designation = $designation;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
