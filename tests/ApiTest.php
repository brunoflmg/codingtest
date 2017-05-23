<?php
namespace Tests;

require_once __DIR__ . '/../autoload.php';

use Api\Api;
use Api\Ticket;
use PHPUnit\Framework\TestCase;

/**
 * Class ApiTest
 * @package Tests
 */
class ApiTest extends TestCase
{
    /**
     * Test set up method
     */
    public function setUp()
    {
        $this->api = new Api();
    }

    /**
     * @return array
     */
    public function testSourceArrayNotEmpty()
    {
        $tickets = include __DIR__ . '/../tickets.php';
        $this->assertNotEmpty($tickets);

        return $tickets;
    }

    /**
     * Test create ticket object from array result
     *
     * @return Ticket
     */
    public function testCreateTicketObjectFromArrayResult()
    {
        $ticket = [
            "number"=>"72301",
            "transportType"=>"Airplane",
            "transportNumber"=>"23458",
            "seat"=>"12A",
            "leg"=>3,
            "baggagePickUpInformation"=>"Your baggage will we automatically transferred from your next leg.",
            "departureLocation"=>"San Francisco",
            "arriveLocation"=>"Saint-Pierre",
            "trip"=>"AA123"
        ];

        $ticketObject = $this->api->createTicketObjectFromArrayResult($ticket);

        $this->assertInstanceOf(Ticket::class, $ticketObject);

        return $ticketObject;
    }
}
