<?php
namespace Api;

use Api\ITicket;
use Api\Trip;
use Api\TransportType;

/**
 * Class ticket
 */
class Ticket implements ITicket
{
    /**
     * Ticket trip
     *
     * @var string
     */
    private $trip;

    /**
     * Ticket number
     *
     * @var string
     */
    private $number;

    /**
     * Ticket type
     *
     * @var string
     */
    private $type;

    /**
     * Ticket leg
     *
     * @var string
     */
    private $leg;

    /**
     * Ticket baggage pick up information
     *
     * @var string
     */
    private $baggagePickUpInformation;

    /**
     * Ticket departure location
     *
     * @var string
     */
    private $departureLocation;

    /**
     * Ticket arrive location
     *
     * @var string
     */
    private $arriveLocation;

    /**
     * Transport seat
     *
     * @var string
     */
    private $seat;

    /**
     * Transport number
     *
     * @var string
     */
    private $transportNumber;

    /**
     * Class constructor for ticket
     *
     * @param Array $ticketData
     * @return void
     */
    public function __construct(Array $ticketData = [])
    {
        foreach ($ticketData as $property => $value) {
            // create an instance of Trip
            if ($property == 'trip') {
                $trip = new Trip();
                $trip->setNumber($value);
                $value = $trip;
            }

            // create an instance of TransportType
            else if ($property == 'transportType') {
                $transportType = new TransportType();
                $transportType->setName($value);
                $value = $transportType;
            }

            // create method name based on property name
            $method = 'set' . ucfirst($property);

            // set property value
            $this->$method($value);
        }
    }

    /**
     * Set trip
     *
     * @param object Trip
     * @return object
     */
    public function setTrip(Trip $trip)
    {
        $this->trip = $trip;

        return $this;
    }

    /**
     * Get trip
     *
     * @return object
     */
    public function getTrip()
    {
        return $this->trip;
    }

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

    /**
     * Set ticket type
     *
     * @param string $type
     * @return object
     */
    public function setType($type)
    {
        $this->type = $type;

        return $type;
    }

    /**
     * Get ticket type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * Set ticket transport type
     *
     * @param  object TransportType
     * @return object
     */
    public function setTransportType(TransportType $transporType)
    {
        $this->transportType = $transporType;

        return $this;
    }

    /**
     * Get ticket transport type
     *
     * @return string
     */
    public function getTransportType()
    {
        return $this->transportType;
    }

    /**
     * Set ticket departure location
     *
     * @param  string $location
     * @return object
     */
    public function setDepartureLocation($location)
    {
        $this->departureLocation = $location;

        return $this;
    }

    /**
     * Get ticket departure location
     *
     * @return string
     */
    public function getDepartureLocation()
    {
        return $this->departureLocation;
    }

    /**
     * Set ticket arrive location
     *
     * @param  string $location
     * @return object
     */
    public function setArriveLocation($location)
    {
        $this->arriveLocation = $location;

        return $this;
    }

    /**
     * Get ticket arrive location
     *
     * @return string
     */
    public function getArriveLocation()
    {
        return $this->arriveLocation;
    }

    /**
     * Set ticket leg
     *
     * @param string $leg
     * @return object
     */
    public function setLeg($leg)
    {
        $this->leg = $leg;

        return $this;
    }

    /**
     * Get ticket leg
     *
     * @return string
     */
    public function getLeg()
    {
        return $this->leg;
    }

    /**
     * Set ticket baggage pick up information
     *
     * @param  string $baggagePickUpLocation
     * @return object
     */
    public function setBaggagePickUpInformation($baggagePickUpInformation)
    {
        $this->baggagePickUpInformation = $baggagePickUpInformation;

        return $this;
    }

    /**
     * Get ticket baggage pick up information
     *
     * @return string
     */
    public function getBaggagePickUpInformation()
    {
        return $this->baggagePickUpInformation;
    }

    /**
     * Set seat/cabin
     *
     * @param string $seat
     * @return object
     */
    public function setSeat($seat)
    {
        $this->seat = $seat;

        return $this;
    }
    
    /**
     * Get seat/cabin
     *
     * @return string
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * Set transport number
     *
     * @param string $number
     * @return object
     */
    public function setTransportNumber($number)
    {
        $this->transportNumber = $number;

        return $this;
    }
    
    /**
     * Get transport number
     *
     * @return string
     */
    public function getTransportNumber()
    {
        return $this->transportNumber;
    }
}
