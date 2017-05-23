<?php
namespace Api;

/**
 * Class to sort an array of tickets
 */
class TicketsSort
{
    private $tickets;

    /**
     * Class constructor
     *
     * @param  Array $tickets
     * @return void
     */
    public function __construct(Array $tickets)
    {   
        $this->tickets = $tickets;
    }

    /**
     * Sort an array of tickets
     *
     * @return Array
     */
    public function getResult()
    {
        // set current trip and last trip number from first ticket record
        $lastTripNumber = $currentTripNumber = $this->tickets[0]['trip'];

        // die(print_r($this->tickets));

        $orderedTickets = [];
        $size = count($this->tickets);

        // reorder the tickets information
        for ($i = 0; $i < $size; $i++) {
            // get current trip number
            $currentTripNumber = $this->tickets[$i]['trip'];

            // get current trip leg
            $leg = $this->tickets[$i]['leg'];

            // put current trip leg in order
            $orderedTickets[$currentTripNumber][$leg] = $this->tickets[$i];

            // order the tickets order from the last trip
            if ($currentTripNumber != $lastTripNumber) {
                ksort($orderedTickets[$lastTripNumber]);
                $lastTripNumber = $currentTripNumber;
            }
        }

        // order the tickets in the last trip
        if ($i == $size) {
            ksort($orderedTickets[$lastTripNumber]);    
        }

        return $orderedTickets;
    }
} 
