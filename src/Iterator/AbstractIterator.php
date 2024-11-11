<?php

namespace Forseti\SegundoExercicio\Iterator;

use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractIterator implements \Iterator, \Countable
{
    /**
     * @var Crawler
     */
    protected $dom;
    /**
     * @var Crawler
     */
    protected $crawler;
    /**
     * total de itens
     * @var int
     */
    protected $total;
    /**
     * @var string
     */
    protected $html;

    /**
     * @throws \Exception
     */
    public function __construct($html, $xpath)
    {
        $this->dom = new Crawler();
        $this->dom->addHtmlContent($html);
        $this->crawler = $this->dom->filterXPath($xpath)->getIterator();
        $this->total = $this->crawler->count();
    }

    abstract function current();

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        $this->crawler->next();
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return $this->crawler->key();
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid()
    {
        return $this->crawler->valid();
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        $this->crawler->rewind();
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     */
    public function count()
    {
        return $this->total;
    }
}