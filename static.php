<?php

class ContohStatic
{
    public static $coba = "hai";

    public static function cobaCoba()
    {
        return "Halo.." . self::$coba . " coba";
    }
}

echo ContohStatic::cobaCoba();
