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
     * @var int
     */
    private int $_id_multimedia;

    /**
     * Post constructor.
     * @param int $_id
     * @param string $_code
     * @param int $_id_multimedia
     */
    public function __construct(int $_id, string $_code, int $_id_multimedia)
    {
        $this->setId($_id);
        $this->setCode($_code);
        $this->setIdMultimedia($_id_multimedia);
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

    /**
     * @return int
     */
    public function getIdMultimedia(): int
    {
        return $this->_id_multimedia;
    }

    /**
     * @param int $id_multimedia
     */
    public function setIdMultimedia(int $id_multimedia): void
    {
        $this->_id_multimedia = $id_multimedia;
    }

}
