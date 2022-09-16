<?php

$uri = explode('/', $_SERVER['REQUEST_URI']);
switch ($uri[1]) {
    case 'tickets':
        if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $desctiption = $_POST["description"];
            $ticket = new Tickets();
            if ($ticket->createTicket($name, $email, $desctiption)) {
                $tickets = $ticket->getAllTickets();
                include_once "tickets.php";
            } else {
                include_once "form.php";
            }
        }

        if (isset($_POST["success"])) {
            $id = $_POST["id"];
            $ticketsCtrl = new Tickets();
            $ticketsCtrl->updateTicket($id);
        }

        if (isset($_POST["delete"])) {
            $id = $_POST["id"];
            $ticketsCtrl = new Tickets();
            $ticketsCtrl->deleteTicket($id);
        }

        if (!isset($uri[2])) {
            $tickets = null;
            $ticketsCtrl = new Tickets();
            $tickets = $ticketsCtrl->getAllTickets();
            include_once "tickets.php";
        } else {
            $id = (int) $uri[2];
            include_once 'ticket.php';
        }
        break;

    default:
        include 'form.php';
        break;
}
