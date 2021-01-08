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
     * @throws Exception
     * @throws Exception
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
    public function getFile(): string
    {
        return $this->_file;
    }

    /**
     * @param string $file
     * @throws Exception
     * @throws Exception
     */
    public function setFile(string $file): void
    {
        if ((strcmp(gettype($file), 'string') == 0) && (strlen($file) >= 5) && (strlen($file) <= 100)) {
            $this->_file = $file;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * @throws Exception
     * @throws Exception
     */
    public function setIdPost(int $id_post): void
    {
        if (strcmp(gettype($id_post), 'integer') == 0) {
            $this->_id_post = $id_post;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
