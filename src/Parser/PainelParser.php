<?php

namespace Forseti\SegundoExercicio\Parser;

use Forseti\SegundoExercicio\Iterator\PainelIterator;

class PainelParser extends AbstractParser
{
    public function getIterator()
    {
        $xPath = "//html/body/div/main/div[1]/div/div/table/tbody/tr";
        return new PainelIterator($this->getHtml(), $xPath);
    }
}