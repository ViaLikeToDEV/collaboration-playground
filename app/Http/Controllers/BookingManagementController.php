<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BookingManagementController extends Controller
{
    public function getBookings(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getBookings endpoint scaffolded']);\n    }

    public function searchBooking(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'searchBooking endpoint scaffolded']);\n    }

    public function getSeatLockHistory(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getSeatLockHistory endpoint scaffolded']);\n    }
}
