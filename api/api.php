<?php

namespace Api;

use Api\TicketsSort;
use Api\Ticket;
use Api\Trip;

/**
 * Tickets Api
 */
class Api 
{
    /**
     * Reorder an array of tickets
     *
     * @param Array $tickets
     * @return Array
     */
    public function readTicketsFromArray(Array $tickets)
    {
        $sorter = new TicketsSort($tickets);

        // get ordered list of tickets
        return $sorter->getResult();
    }

    /**
     * Create a new ticket instance
     *
     * @param Array $ticketData
     * @return void
     */
    public function createTicketObjectFromArrayResult(Array $ticketData)
    {
        if (empty($ticketData)) {
            throw new \Exception("The provided ticket is empty.");
        }

        return new Ticket($ticketData);
    }
}
