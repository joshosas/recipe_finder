<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SpoonacularService;

class RecipeController extends Controller
{
    protected $spoonacularService;

    public function __construct(SpoonacularService $spoonacularService)
    {
        $this->spoonacularService = $spoonacularService;
    }

    public function index(Request $request)
    {
        $query = $request->input('q');
        $recipes = $this->spoonacularService->searchRecipes($query);
        return view('recipes.index', compact('recipes'));
    }
}
