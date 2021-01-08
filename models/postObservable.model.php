<?php


/**
 * Class PostObservable
 */
class PostObservable
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var string
     */
    private string $_note;
    /**
     * @var int
     */
    private int $_id_post;
    /**
     * @var int
     */
    private int $_id_observable;

    /**
     * PostObservable constructor.
     * @param int $_id
     * @param string $_note
     * @param int $_id_post
     * @param int $_id_observable
     * @throws Exception
     * @throws Exception
     */
    public function __construct(int $_id, string $_note, int $_id_post, int $_id_observable)
    {
        $this->setId($_id);
        $this->setNote($_note);
        $this->setIdPost($_id_post);
        $this->setIdObservable($_id_observable);
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
    public function getNote(): string
    {
        return $this->_note;
    }

    /**
     * @param string $note
     * @throws Exception
     * @throws Exception
     */
    public function setNote(string $note): void
    {
        if ((strcmp(gettype($note), 'string') == 0) && (strlen($note) >= 1) && (strlen($note) <= 100)) {
            $this->_note = $note;
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

    /**
     * @return int
     */
    public function getIdObservable(): int
    {
        return $this->_id_observable;
    }

    /**
     * @param int $id_observable
     * @throws Exception
     * @throws Exception
     */
    public function setIdObservable(int $id_observable): void
    {
        if (strcmp(gettype($id_observable), 'integer') == 0) {
            $this->_id_observable = $id_observable;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
