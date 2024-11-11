<?php

namespace Forseti\SegundoExercicio\Regex;

final class Regex
{
    public static function getHora($str)
    {
        $regex = '/\d*/m';
        preg_match_all($regex, $str, $matches, PREG_SET_ORDER, 0);
        return $matches [0][0] . ' Horas';
    }
    public static function getMinuto($str)
    {
        $regex = '/\d*/m';
        preg_match_all($regex, $str, $matches, PREG_SET_ORDER, 0);
        return $matches [2][0] . ' Minutos';
    }
    public static function getSegundo($str)
    {
        $regex = '/\d*/m';
        preg_match_all($regex, $str, $matches, PREG_SET_ORDER, 0);
        return $matches [4][0] . ' Segundos';
    }
}