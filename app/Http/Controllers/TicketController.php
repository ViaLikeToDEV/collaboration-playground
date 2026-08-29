<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function getTickets(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getTickets endpoint scaffolded']);\n    }
}
