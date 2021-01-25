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
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    /**
     * @param string $url
     */
    function redirectServerSide(string $url) : void
    {
        header('Location: ' . $url);
    }

    /**
     * @param string $url
     */
    function redirectClientSide(string $url) : void
    {
        echo "<script>window.location.href=".$url."</script>";
        exit;
    }

}
