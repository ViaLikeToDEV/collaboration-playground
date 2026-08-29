<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function createBooking(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'createBooking endpoint scaffolded']);\n    }

    public function getBookingHistory(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getBookingHistory endpoint scaffolded']);\n    }

    public function getCustomerContact(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getCustomerContact endpoint scaffolded']);\n    }
}
