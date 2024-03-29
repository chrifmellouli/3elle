<?php


/**
 * Class SPDO
 * @property SPDO|null instance
 */
class SPDO
{

    /**
     * Instance of class PDO
     * @var PDO|null
     */
    private ?PDO $PDOInstance;


    /**
     * Instance of class SPDO
     *
     * @var SPDO|null
     */
    private static ?SPDO $instance = null;

    /**
     * Constante: db user name
     *
     * @var string
     */
    const DEFAULT_SQL_USER = 'root';

    /**
     * Constante: bd host
     *
     * @var string
     */
    const DEFAULT_SQL_HOST = 'localhost';

    /**
     * Constante: db user password
     *
     * @var string
     */
    const DEFAULT_SQL_PASS = 'Root_123';

    /**
     * Constante: db name
     *
     * @var string
     */
    const DEFAULT_SQL_DTB = '3elle';

    /**
     * Constructor
     *
     * @param void
     * @return void
     * @see PDO::__construct()
     * @access private
     */
    private function __construct()
    {
        $this -> PDOInstance = new PDO( 'mysql:dbname=' . self::DEFAULT_SQL_DTB . ';host=' . self::DEFAULT_SQL_HOST, self::DEFAULT_SQL_USER, self::DEFAULT_SQL_PASS );
    }

    /**
     * instance and return SPDO
     *
     * @access public
     * @static
     * @param void
     * @return SPDO $instance
     */
    public static function getInstance(): ?SPDO
    {
        if (is_null ( self ::$instance )) {
            self ::$instance = new SPDO();
        }
        return self ::$instance;
    }

    /**
     * Execute an sql query with PDO
     *
     * @param string $query SQL query
     * @return PDOStatement Return PDOStatement object
     */
    public function query(string $query): ?PDOStatement
    {
        $result = $this -> PDOInstance -> query ( $query );
        if (strcmp ( gettype ( $result ), 'boolean' ) == 0) {
            return null;
        } else {
            return $result;
        }
    }

    /**
     * Execute an insert sql query with PDO
     *
     * @param string $query SQL query
     * @return string
     */
    public function insert(string $query): string
    {
        $this -> PDOInstance -> prepare ( $query ) -> execute ();
        return $this -> PDOInstance -> lastInsertId ();
    }

    /**
     * Execute an update sql query with PDO
     *
     * @param string $query
     */
    public function updateOrDelete(string $query): void
    {
        $this -> PDOInstance -> prepare ( $query ) -> execute ();
    }

}
