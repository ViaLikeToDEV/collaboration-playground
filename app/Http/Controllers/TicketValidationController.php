<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TicketValidationController extends Controller
{
    public function scanTicketQR(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'scanTicketQR endpoint scaffolded']);\n    }

    public function validateTicketNumber(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'validateTicketNumber endpoint scaffolded']);\n    }

    public function getValidationHistory(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getValidationHistory endpoint scaffolded']);\n    }
}
