<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function searchConcert(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'searchConcert endpoint scaffolded']);\n    }

    public function getConcertList(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getConcertList endpoint scaffolded']);\n    }

    public function getConcertDetail(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'getConcertDetail endpoint scaffolded']);\n    }

    public function createConcert(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'createConcert endpoint scaffolded']);\n    }

    public function updateConcert(Request $request): JsonResponse\n    {\n        return response()->json(['message' => 'updateConcert endpoint scaffolded']);\n    }
}
