<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function processPayment(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'processPayment endpoint scaffolded']);\n    }

    public function verifyPayment(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'verifyPayment endpoint scaffolded']);\n    }
}
