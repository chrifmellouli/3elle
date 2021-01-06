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
     * @return string
     */
    public function getCode(): string
    {
        return $this->_code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->_code = $code;
    }

}
