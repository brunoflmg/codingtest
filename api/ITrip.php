<?php

namespace Api;

/**
 * Interface ITrip
 */
interface ITrip
{
    /**
     * Set trip number
     *
     * @param string $number
     * @return object
     */
    public function setNumber($number);

    /**
     * Get trip number
     *
     * @return string
     */
    public function getNumber();
}
