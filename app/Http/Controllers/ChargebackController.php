<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ChargebackController extends Controller
{
    public function getChargebacks(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getChargebacks endpoint scaffolded']);\n    }

    public function updateChargebackStatus(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'updateChargebackStatus endpoint scaffolded']);\n    }

    public function syncChargebackFromProvider(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'syncChargebackFromProvider endpoint scaffolded']);\n    }
}
