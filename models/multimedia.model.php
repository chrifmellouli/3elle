<?php


/**
 * Class Multimedia
 */
class Multimedia
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var string
     */
    private string $_file;
    /**
     * @var int
     */
    private int $_id_post;

    /**
     * Multimedia constructor.
     * @param int $_id
     * @param string $_file
     * @param int $_id_post
     */
    public function __construct(int $_id, string $_file, int $_id_post)
    {
        $this->setId($_id);
        $this->setFile($_file);
        $this->setIdPost($_id_post);
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
    public function getFile(): string
    {
        return $this->_file;
    }

    /**
     * @param string $file
     */
    public function setFile(string $file): void
    {
        $this->_file = $file;
    }

    /**
     * @return int
     */
    public function getIdPost(): int
    {
        return $this->_id_post;
    }

    /**
     * @param int $id_post
     */
    public function setIdPost(int $id_post): void
    {
        $this->_id_post = $id_post;
    }

}
