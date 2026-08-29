<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuditLogController extends Controller
{
    public function getLogs(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getLogs endpoint scaffolded']);\n    }

    public function searchLogs(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'searchLogs endpoint scaffolded']);\n    }
}
