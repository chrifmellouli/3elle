<?php


/**
 * Class Privilege
 */
class Privilege
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var string
     */
    private string $_designation;

    /**
     * Privilege constructor.
     * @param int $_id
     * @param string $_designation
     */
    public function __construct(int $_id, string $_designation)
    {
        $this->setId($_id);
        $this->setDesignation($_designation);
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
     * @return String
     */
    public function getDesignation(): string
    {
        return $this->_designation;
    }

    /**
     * @param String $designation
     */
    public function setDesignation(string $designation): void
    {
        $this->_designation = $designation;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "------<br>Privilege<br> id : " . $this->getId() . "<br> designation : " . $this->getDesignation() . "<br>------<br>";
    }


}
