<?php


class StepObsevable
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
    private int $_id_step;
    /**
     * @var int
     */
    private int $_id_observable;

    /**
     * StepObsevable constructor.
     * @param int $_id
     * @param string $_note
     * @param int $_id_step
     * @param int $_id_observable
     */
    public function __construct(int $_id, string $_note, int $_id_step, int $_id_observable)
    {
        $this->setId($_id);
        $this->setNote($_note);
        $this->setIdStep($_id_step);
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
    public function getIdStep(): int
    {
        return $this->_id_step;
    }

    /**
     * @param int $id_step
     */
    public function setIdStep(int $id_step): void
    {
        $this->_id_step = $id_step;
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
