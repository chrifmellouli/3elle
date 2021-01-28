<?php


/**
 * Class Utilities
 */
class Utilities
{

    /**
     * Utilities constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param string $date
     * @param string $format
     * @return bool
     */
    function validateDate(string $date, string $format = 'Y-m-d H:i:s'): bool
    {
        $d = DateTime ::createFromFormat ( $format, $date );
        return $d && $d -> format ( $format ) == $date;
    }

    /**
     * @param string $url
     */
    function redirectServerSide(string $url): void
    {
        header ( 'Location: ' . $url );
    }

    /**
     * @param string $url
     */
    function redirectClientSide(string $url): void
    {
        echo "<script>window.location.href=" . $url . "</script>";
        exit;
    }

    function verification(): void
    {
        $url = "/dashbord/login.php";
        if ( !isset( $_SESSION[ 'user_name' ] ) || !isset( $_SESSION[ 'password' ] )
            || !isset( $_SESSION[ 'is_connected' ] ) || !isset( $_SESSION[ 'position' ] )
            || !isset( $_SESSION[ 'position' ] ) || !isset( $_SESSION[ 'id' ] )
            || ($_SESSION[ 'is_connected' ] != '1') ) {
            header ( 'Location: ' . $url );
            exit();
        }
    }

}
