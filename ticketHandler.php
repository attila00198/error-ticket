<?php

$uri = explode('/', $_SERVER['REQUEST_URI']);
switch ($uri[1]) {
    case 'tickets':
        if (isset($_POST["success"])) {
            $id = $_POST["id"];
            $ticketsCtrl = new Tickets();
            $ticketsCtrl->updateTicket($id);

        }
        if (!isset($_POST["submit"])) {
            if (!isset($uri[2])) {
                $tickets = null;
                $ticketsCtrl = new Tickets();
                $tickets = $ticketsCtrl->getAllTickets();
                header("location: /tickets");
            } else {
                $id = (int) $uri[2];
                include 'ticket.php';
            }
        } else {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $desctiption = $_POST["description"];
            $ticket = new Tickets();
            if ($ticket->createTicket($name, $email, $desctiption)) {
                include "tickets.php";
            } else {
                $msg = "Híba történt Kérlek Próbáld meg újra";
            }
        }
        break;

    default:
        include 'form.php';
        break;
}
