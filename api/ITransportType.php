<?php
namespace Api;

/**
 * Interface ITransportType
 */
interface ITransportType
{
    /**
     * Set Transport name
     *
     * @param string $name
     * @return object
     */
    public function setName($name);
    
    /**
     * Get transport name
     *
     * @return string
     */
    public function getName();
}
