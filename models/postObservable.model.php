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
     */
    public function setId(int $id): void
    {
        $this->_id = $id;
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
     */
    public function setNote(string $note): void
    {
        $this->_note = $note;
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

    /**
     * @return int
     */
    public function getIdObservable(): int
    {
        return $this->_id_observable;
    }

    /**
     * @param int $id_observable
     */
    public function setIdObservable(int $id_observable): void
    {
        $this->_id_observable = $id_observable;
    }

}
