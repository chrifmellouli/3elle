<?php


class Observable
{
    private int $_id;

    /**
     * Observable constructor.
     * @param int $_id
     * @throws Exception
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

}
