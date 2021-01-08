<?php


class Utilities
{

    /**
     * Utilities constructor.
     */
    public function __construct()
    {
    }

    function validateDate(string $date, string $format = 'Y-m-d H:i:s'): bool
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
}