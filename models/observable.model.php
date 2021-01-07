<?php


class Observable
{
    private int $_id;

    /**
     * Observable constructor.
     * @param int $_id
     */
    public function __construct(int $_id)
    {
        $this->setId($_id);
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

}
