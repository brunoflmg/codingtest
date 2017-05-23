<?php

namespace Api;

/**
 * Class trip
 */
Class Trip
{
    /**
     * Ticket number
     *
     * @var string
     */
    private $number;

    /**
     * Set ticket trip number
     *
     * @param string $number
     * @return object
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get ticket trip number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }
}
