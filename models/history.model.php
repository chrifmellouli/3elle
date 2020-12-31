<?php


/**
 * Class History
 */
class History
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var DateTime
     */
    private DateTime $_date;
    /**
     * @var string
     */
    private string $_note;
    /**
     * @var int
     */
    private int $_id_user;

    /**
     * History constructor.
     * @param int $_id
     * @param String $_note
     * @param int $_id_user
     */
    public function __construct(int $_id, string $_note, int $_id_user)
    {
        $this->setId($_id);
        $this->setDate(new DateTime('now'));
        $this->setNote($_note);
        $this->setIdUser($_id_user);
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
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->_date;
    }

    /**
     * @param DateTime $date
     */
    private function setDate(DateTime $date): void
    {
        $this->_date = $date;
    }

    /**
     * @return String
     */
    public function getNote(): string
    {
        return $this->_note;
    }

    /**
     * @param String $note
     */
    public function setNote(string $note): void
    {
        $this->_note = $note;
    }

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->_id_user;
    }

    /**
     * @param int $id_user
     */
    public function setIdUser(int $id_user): void
    {
        $this->_id_user = $id_user;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return '<br>------<br>History<br> id : ' . $this->getId() . '<br> date : ' . $this->getDate()->format('Y-m-d H:i:s') . '<br> note : ' . $this->getNote() . '<br> user : ' . $this->getIdUser() . '<br>------<br>';
    }

}
