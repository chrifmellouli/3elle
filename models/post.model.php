<?php


/**
 * Class Post
 */
class Post
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var string
     */
    private string $_code;

    /**
     * Post constructor.
     * @param int $_id
     * @param string $_code
     * @throws Exception
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
    public function getCode(): string
    {
        return $this->_code;
    }

    /**
     * @param string $code
     * @throws Exception
     * @throws Exception
     */
    public function setCode(string $code): void
    {
        if ((strcmp(gettype($code), 'string') == 0) && (strlen($code) >= 4) && (strlen($code) <= 50)) {
            $this->_code = $code;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
