<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AnomalyController extends Controller
{
    public function getAnomalies(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getAnomalies endpoint scaffolded']);\n    }

    public function getAnomalyDetail(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getAnomalyDetail endpoint scaffolded']);\n    }

    public function updateAnomalyStatus(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'updateAnomalyStatus endpoint scaffolded']);\n    }

    public function executeAction(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'executeAction endpoint scaffolded']);\n    }
}
