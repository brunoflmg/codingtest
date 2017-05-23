<?php
namespace Api;

use Api\Trip;
use Api\TransportType;

/**
 * Interface ITicket
 */
interface ITicket
{
    /**
     * Set trip
     *
     * @param  Trip $trip
     * @return object
     */
    public function setTrip(Trip $trip);

    /**
     * Get trip
     *
     * @return object
     */
    public function getTrip();

    /**
     * Set ticket number
     *
     * @param string $number
     * @return object
     */
    public function setNumber($number);

    /**
     * Get ticket number
     *
     * @return string
     */
    public function getNumber();

    /**
     * Set ticket type
     *
     * @param string $type
     * @return object
     */
    public function setType($type);

    /**
     * Get ticket type
     *
     * @return string
     */
    public function getType();
    
    /**
     * Set ticket transport type
     *
     * @param TransportType
     * @return object
     */
    public function setTransportType(TransportType $transporType);

    /**
     * Get ticket transport type
     *
     * @return string
     */
    public function getTransportType();

    /**
     * Set ticket departure location
     *
     * @param  string $location
     * @return object
     */
    public function setDepartureLocation($location);

    /**
     * Get ticket departure location
     *
     * @return string
     */
    public function getDepartureLocation();

    /**
     * Set ticket arrive location
     *
     * @param string $location
     * @return object
     */
    public function setArriveLocation($location);

    /**
     * Get ticket arrive location
     *
     * @return string
     */
    public function getArriveLocation();

    /**
     * Set ticket leg
     *
     * @param string $leg
     * @return object
     */
    public function setLeg($leg);

    /**
     * Get ticket leg
     *
     * @return string
     */
    public function getLeg();

    /**
     * Set ticket baggage pick up information
     *
     * @param  string $baggagePickUpInformation
     * @return object
     */
    public function setBaggagePickUpInformation($baggagePickUpInformation);

    /**
     * Get ticket baggage pick up information
     *
     * @return string
     */
    public function getBaggagePickUpInformation();

    /**
     * Set transport seat/cabin
     *
     * @param string $seat
     * @return object
     */
    public function setSeat($seat);
    
    /**
     * Get transport seat/cabin
     *
     * @return string
     */
    public function getSeat();

    /**
     * Set transport number
     *
     * @param string $number
     * @return object
     */
    public function setTransportNumber($number);
    
    /**
     * Get transport number
     *
     * @return string
     */
    public function getTransportNumber();
}