<?php


/**
 * Class OptionAr
 */
class OptionAr
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
     * @var int
     */
    private int $_id_option;

    /**
     * OptionAr constructor.
     * @param int $_id
     * @param string $_designation
     * @param int $_id_option
     * @throws Exception
     */
    public function __construct(int $_id, string $_designation, int $_id_option)
    {
        $this->setId($_id);
        $this->setDesignation($_designation);
        $this->setIdOption($_id_option);
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

    /**
     * @return string
     */
    public function getDesignation(): string
    {
        return $this->_designation;
    }

    /**
     * @param string $designation
     * length : 1 .. 50
     * @throws Exception
     */
    public function setDesignation(string $designation): void
    {
        if ((strcmp(gettype($designation), 'string') == 0) && (strlen($designation) >= 1) && (strlen($designation) <= 50)) {
            $this->_designation = $designation;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

    /**
     * @return int
     */
    public function getIdOption(): int
    {
        return $this->_id_option;
    }

    /**
     * @param int $id_option
     * @throws Exception
     */
    public function setIdOption(int $id_option): void
    {
        if (strcmp(gettype($id_option), 'integer') == 0) {
            $this->_id_option = $id_option;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
