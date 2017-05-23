<?php

namespace Api;

use Api\ITransportType;

/**
 * Class TransportType
 */
Class TransportType implements ITransportType
{
    /**
     * Transport name
     *
     * @var string
     */
    private $name;

    /**
     * Set Transport name
     *
     * @param string $name
     * @return void
     */
    public function setName($name) 
    {
        $this->name = $name;
    }
    
    /**
     * Get transport name
     *
     * @return void
     */
    public function getName()
    {
        return $this->name;
    }
}
