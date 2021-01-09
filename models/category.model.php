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
     * @throws Exception
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
    public function getCode(): string
    {
        return $this->_code;
    }

    /**
     * @param String $code
     * length : 4 .. 8
     * @throws Exception
     */
    public function setCode(string $code): void
    {
        if ((strcmp(gettype($code), 'string') == 0) && (strlen($code) >= 4) && (strlen($code) <= 8)) {
            $this->_code = $code;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
