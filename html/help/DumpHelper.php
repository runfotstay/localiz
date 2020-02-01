<?php

/**
 * Class dump
 */
class dumpHelper
{
    /**
     * @param $var
     */
    public function dump($var)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
}
