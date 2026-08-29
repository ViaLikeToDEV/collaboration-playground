<?php

namespace App\Services;

use App\Models\Ticket;

class TicketService
{
    public function generateQR(Ticket $ticket): string
    {
        return (string) $ticket->ticket_id;
    }

    public function validateTicket(Ticket $ticket): bool
    {
        return ! $ticket->is_used;
    }

    public function markAsUsed(Ticket $ticket): Ticket
    {
        $ticket->is_used = true;

        return $ticket;
    }
}
