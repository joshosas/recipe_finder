<?php

namespace App\Http\Controllers;

use App\Services\HumorService;
use Illuminate\Http\Request;
use App\Services\SpoonacularService;

class RecipeController extends Controller
{
    protected $spoonacularService;
    protected $humorservice;

    public function __construct(SpoonacularService $spoonacularService, HumorService $humorService)
    {
        $this->spoonacularService = $spoonacularService;
        $this->humorservice = $humorService;
    }

    public function index(Request $request)
    {
        $query = $request->input();
        $recipes = $this->spoonacularService->searchRecipes();

        $humors = $this->humorservice->searchJokes();


        return view('recipes.index', compact(['recipes', 'humors']));
    }

    public function show($id)
    {
        // Fetch details of the recipe with the given ID from the service
        $recipe = $this->spoonacularService->getRecipeById($id);

        // Return the recipe details to the view
        return view('recipes.show', compact('recipe'));
    }
}
