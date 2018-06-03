<?php

namespace App\Http\Controllers;

use App\Ingredient;
use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = Ingredient::all();
        $recipes = Recipe::all();
        return view('recipes.index', ['recipes' => $recipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create', [
            'recipes' => [],
            'ingredients' => Ingredient::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $recipe = Recipe::create($request->all());

        $recipe->ingredients()->attach($request->input('ingredients'));

        return redirect()->route("recipes.index", $recipe);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        $ingredients = $recipe->ingredients;

        return view('recipes.show', ['ingredients' => $ingredients, 'recipe' => $recipe]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Myrecipe = Recipe::find($id);

        return view('recipes.edit', ['recipe' => $Myrecipe, 'ingredients' => Ingredient::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);

        $recipe->fill($request->all());
        $recipe->save();

        $recipe->ingredients()->sync($request->input('ingredients'));

        return redirect()->route("recipes.index", $recipe);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
