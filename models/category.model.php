<?php


/**
 * Class Category
 */
class Category
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var String
     */
    private string $_code;
    /**
     * @var bool
     */
    private bool $_enable;

    /**
     * Category constructor.
     * @param int $_id
     * @param string $_code
     * @param bool $_enable
     * @throws Exception
     */
    public function __construct(int $_id, string $_code, bool $_enable)
    {
        $this ->setId ($_id);
        $this -> setCode ($_code);
        $this ->setEnable ($_enable);
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this -> _id;
    }

    /**
     * @param int $id
     * @throws Exception
     */
    public function setId(int $id): void
    {
        if ( strcmp ( gettype ( $id ), 'integer' ) == 0 ) {
            $this -> _id = $id;
        } else {
            throw new Exception( 'Unexceped value for this filed' );
        }
    }

    /**
     * @return String
     */
    public function getCode(): string
    {
        return $this -> _code;
    }

    /**
     * @param String $code
     * length : 4 .. 8
     * @throws Exception
     */
    public function setCode(string $code): void
    {
        if ( (strcmp ( gettype ( $code ), 'string' ) == 0) && (strlen ( $code ) >= 4) && (strlen ( $code ) <= 8) ) {
            $this -> _code = $code;
        } else {
            throw new Exception( 'Unexceped value for this filed' );
        }
    }

    /**
     * @return bool
     */
    public function isEnable(): bool
    {
        return $this -> _enable;
    }

    /**
     * @param bool $enable
     * @throws Exception
     */
    public function setEnable(bool $enable): void
    {
        if ( strcmp ( gettype ( $enable ), 'boolean' ) == 0 ) {
            $this -> _enable = $enable;
        } else {
            throw new Exception( self::UNEXCEPED_VALUE_FOR_THIS_FILED );
        }
    }

}
