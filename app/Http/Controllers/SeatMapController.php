<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SeatMapController extends Controller
{
    public function createZone(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'createZone endpoint scaffolded']);\n    }

    public function updateZone(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'updateZone endpoint scaffolded']);\n    }

    public function defineSeatMap(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'defineSeatMap endpoint scaffolded']);\n    }

    public function updateSeat(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'updateSeat endpoint scaffolded']);\n    }
}
