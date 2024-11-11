<?php

namespace Forseti\SegundoExercicio\Iterator;

use Forseti\SegundoExercicio\Regex\Regex;

class PainelIterator extends AbstractIterator
{
    public function current()
    {
        $node = $this->crawler->current();
        $objeto = new \stdClass();
        /*$objeto->inicio = $node->getElementsByTagName("td")->item(0)->textContent;
        $objeto->inicioIntervalo = $node->getElementsByTagName("td")->item(1)->textContent;
        $objeto->fimIntervalo = $node->getElementsByTagName("td")->item(2)->textContent;
        $objeto->fim = $node->getElementsByTagName("td")->item(3)->textContent;*/

        $objeto->inicioHora = Regex::getHora($node->getElementsByTagName("td")->item(0)->textContent);
        $objeto->inicioMinuto = Regex::getMinuto($node->getElementsByTagName("td")->item(0)->textContent);
        $objeto->inicioSegundo = Regex::getSegundo($node->getElementsByTagName("td")->item(0)->textContent);

        $objeto->inicioIntervaloHora = Regex::getHora($node->getElementsByTagName("td")->item(1)->textContent);
        $objeto->inicioIntervaloMinuto = Regex::getMinuto($node->getElementsByTagName("td")->item(1)->textContent);
        $objeto->inicioIntervaloSegundo = Regex::getSegundo($node->getElementsByTagName("td")->item(1)->textContent);

        $objeto->fimIntervaloHora = Regex::getHora($node->getElementsByTagName("td")->item(2)->textContent);
        $objeto->fimIntervaloMinuto = Regex::getMinuto($node->getElementsByTagName("td")->item(2)->textContent);
        $objeto->fimIntervaloSegundo = Regex::getSegundo($node->getElementsByTagName("td")->item(2)->textContent);

        $objeto->fimHora = Regex::getHora($node->getElementsByTagName("td")->item(3)->textContent);
        $objeto->fimMinuto = Regex::getMinuto($node->getElementsByTagName("td")->item(3)->textContent);
        $objeto->fimSegundo = Regex::getSegundo($node->getElementsByTagName("td")->item(3)->textContent);
        return $objeto;
    }
}