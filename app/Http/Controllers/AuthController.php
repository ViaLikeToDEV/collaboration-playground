<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerCustomer(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'registerCustomer endpoint scaffolded']);\n    }

    public function login(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'login endpoint scaffolded']);\n    }

    public function logout(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'logout endpoint scaffolded']);\n    }
}
