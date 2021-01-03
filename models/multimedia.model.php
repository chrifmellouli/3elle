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
     * Multimedia constructor.
     * @param int $_id
     * @param string $_file
     */
    public function __construct(int $_id, string $_file)
    {
        $this->setId($_id);
        $this->setFile($_file);
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

}
