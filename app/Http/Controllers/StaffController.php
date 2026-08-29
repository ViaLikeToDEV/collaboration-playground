<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function createStaff(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'createStaff endpoint scaffolded']);\n    }

    public function assignStaffToConcert(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'assignStaffToConcert endpoint scaffolded']);\n    }

    public function unassignStaffFromConcert(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'unassignStaffFromConcert endpoint scaffolded']);\n    }

    public function getAssignedConcerts(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getAssignedConcerts endpoint scaffolded']);\n    }
}
