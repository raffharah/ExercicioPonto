<?php

namespace Forseti\SegundoExercicio\Parser;

use \Forseti\SegundoExercicio\Parser\AbstractParser;

class TokenParser extends AbstractParser
{
    public function getTokenParser()
    {
        $xPath = $this->crawler->filterXPath('//*[@id="app"]/main/div/div/div/div/div[2]/form/input')->attr('value');
        return $xPath;
    }
}