<?php

namespace App\Http\Controllers;

use App\Models\recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $recettes = recette::query()->paginate(perPage:1);
        $recettes = recette::all();
        return view('welcome', compact('recettes'));
    }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         $recettes = new Recette();
//         // $recettes->quatity = $recettes->
//         $isUpdate = false;
//         return view('recettes.create', compact('recettes'));
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(recetteRequest $request)
//     {
//         $formFields = $request->validation();
//         if ($request->hasFile(key: 'image')) {
//             $formfields['image'] = $request->file(key: 'image')->store(path: 'recette', options: 'public');
//         }
//         recette::create($formfields);
//         return to_route(route: 'recettes.index'->with('success', 'recette create successfully'));
//         dd();
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\recette  $recette
//      * @return \Illuminate\Http\Response
//      */
//     public function show(recette $recette)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\recette  $recette
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(recette $recette)
//     {
//         $isUpdate = true;
//         return view(view: 'recettes.edit', compact(var_name: 'recettes', var_names: 'isUpdate'));
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\recette  $recette
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, recette $recette)
//     {
//         $formfields = $request->validated();
//         $recette->fill($formFields);
//         dd($recette);
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\recette  $recette
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(recette $recette)
//     {
//         $recette->delete();
//         return to_route(route: 'recettes.index'->with('success', 'recette create successfully'));
//         dd($recette);
//     }
}
