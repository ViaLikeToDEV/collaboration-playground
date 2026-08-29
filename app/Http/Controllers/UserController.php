<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getProfile endpoint scaffolded']);\n    }

    public function updateProfile(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'updateProfile endpoint scaffolded']);\n    }

    public function changePassword(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'changePassword endpoint scaffolded']);\n    }
}
