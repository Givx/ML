<?php

namespace Rubix\ML;

use Rubix\ML\Persisters\Persister;
use Stringable;

use function strlen;

class Encoding implements Stringable
{
    /**
     * The encoded data.
     *
     * @var string
     */
    protected $data;

    /**
     * @param string $data
     */
    public function __construct(string $data)
    {
        $this->data = $data;
    }

    /**
     * Return the encoded data.
     *
     * @return string
     */
    public function data() : string
    {
        return $this->data;
    }

    /**
     * Save the encoding.
     *
     * @param \Rubix\ML\Persisters\Persister $persister
     */
    public function save(Persister $persister) : void
    {
        $persister->save($this);
    }

    /**
     * Return the size of the encoding in bytes.
     *
     * @return int
     */
    public function bytes() : int
    {
        return strlen($this->data);
    }

    /**
     * Return the object as a string.
     *
     * @return string
     */
    public function __toString() : string
    {
        return $this->data;
    }
}
