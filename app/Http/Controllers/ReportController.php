<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function getMonthlySales(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getMonthlySales endpoint scaffolded']);\n    }

    public function getYearlySales(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getYearlySales endpoint scaffolded']);\n    }
}
