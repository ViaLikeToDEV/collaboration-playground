<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function getUsers(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getUsers endpoint scaffolded']);\n    }

    public function searchUser(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'searchUser endpoint scaffolded']);\n    }

    public function banUser(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'banUser endpoint scaffolded']);\n    }

    public function unbanUser(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'unbanUser endpoint scaffolded']);\n    }

    public function changeOrganizerCompany(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'changeOrganizerCompany endpoint scaffolded']);\n    }

    public function createOrganizer(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'createOrganizer endpoint scaffolded']);\n    }

    public function createAdmin(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'createAdmin endpoint scaffolded']);\n    }
}
