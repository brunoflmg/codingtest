<?php

// api files
require 'autoload.php';

use Api\Api;

$api = new Api();

// read tickets information from PHP Array.
$trips = $api->readTicketsFromArray(include 'tickets.php');

// starting showing the output
echo "<h1>Trips details information</h1>";

// show output information for each trip (in real world this output will be an app view responsability)
foreach ($trips as $trip => $tickets) {
    echo '<h2>Trip #' . $trip;

    $i = 1;
    foreach ($tickets as $ticket) {
        $ticket = $api->createTicketObjectFromArrayResult($ticket);

        echo "<p>$i. Take " . $ticket->getTransportType()->getName();
        echo ", number " . $ticket->getTransportNumber();
        echo ' from ' . $ticket->getDepartureLocation() . ' to ' . $ticket->getArriveLocation() . '.';

        // check if there's information about seat
        if (!empty($ticket->getSeat())) {
            echo ' Sit in seat ' . $ticket->getSeat() . '.';
        }

        // check if there's any information about baggage claim
        if (!empty($ticket->getBaggagePickUpInformation())) {
            echo '<br>' . $ticket->getBaggagePickUpInformation();
        }

        echo '</p>';
        $i++;
    }

    echo '<p>'. $i . '. You have arrived at your final destination.</p>';
    echo '<br><hr><br>';
}