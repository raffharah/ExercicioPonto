<?php

namespace Forseti\SegundoExercicio\PageObject;


use Forseti\SegundoExercicio\Beans\Auth;
use Forseti\SegundoExercicio\Enum\Url;
use Forseti\SegundoExercicio\Parser\PainelParser;
use Forseti\SegundoExercicio\Parser\TokenParser;

class IndexPageObject extends AbstractPageObject
{
    use Auth;
    public function getToken()
    {
        $respose = $this->request('GET', Url::HTML_INDEX);
        return new TokenParser($respose->getBody()->getContents());
    }

    public function getLogin()
    {
        $respose = $this->request('POST', Url::HTML_INDEX, [
            'form_params' => [
                '_token' => $this->getToken()->getTokenParser(),
                'email' => $this->usuario,
                'password' => $this->senha

            ]
        ]);
        return new PainelParser($respose->getBody()->getContents());
    }
}